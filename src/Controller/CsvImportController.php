<?php 

namespace App\Controller;

use App\Entity\User;
use App\Entity\Infos;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class CsvImportController extends AbstractController
{
    #[IsGranted('ROLE_ADMIN')]
    #[Route('/admin/import-csv', name: 'admin_import_csv', methods: ['GET', 'POST'])]
    public function importCsv(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Vérifiez si un fichier a été envoyé via le formulaire
        $file = $request->files->get('csv_file');
        if ($request->isMethod('POST') && $file) {
            // Vérifiez que le fichier est au format CSV
            if ($file->getClientOriginalExtension() !== 'csv') {
                $this->addFlash('error', 'Le fichier doit être au format CSV.');
                return $this->redirectToRoute('admin_import_csv');
            }

            if (($handle = fopen($file->getPathname(), 'r')) !== false) {
                $header = fgetcsv($handle, 1000, ';'); // Lire la première ligne comme en-tête

                // Vérifiez que le fichier contient les colonnes nécessaires
                if (count($header) < 7 || strtolower($header[0]) !== 'username' || strtolower($header[1]) !== 'email' || strtolower($header[2]) !== 'password') {
                    fclose($handle);
                    $this->addFlash('error', 'Le fichier CSV doit contenir les colonnes "username", "email", "password", "roles", "rank", "victoire" et "defaite".');
                    return $this->redirectToRoute('admin_import_csv');
                }

                // Parcourez chaque ligne du fichier CSV
                while (($data = fgetcsv($handle, 1000, ';')) !== false) {
                    if (count($data) < 7) {
                        continue; // Ignorez les lignes invalides
                    }

                    // Créez un nouvel utilisateur pour chaque ligne valide
                    $user = new User();
                    $user->setUsername(trim($data[0])); // Colonne 1 : username
                    $user->setEmail(trim($data[1]));    // Colonne 2 : email
                    $user->setPassword(password_hash(trim($data[2]), PASSWORD_BCRYPT)); // Colonne 3 : password

                    // Colonne 4 : roles (convertir en tableau)
                    $roles = explode(',', trim($data[3]));
                    $user->setRoles(!empty($roles) ? $roles : ['ROLE_USER']); // Par défaut ROLE_USER

                    // Vérifiez si l'utilisateur existe déjà (par email)
                    $existingUser = $entityManager->getRepository(User::class)->findOneBy(['email' => $user->getEmail()]);
                    if ($existingUser) {
                        continue; // Ignorez les doublons basés sur l'email
                    }

                    // Persistez l'utilisateur dans la base de données
                    $entityManager->persist($user);

                    // Gérer les informations supplémentaires (Infos)
                    if (!empty(trim($data[4])) || !empty(trim($data[5])) || !empty(trim($data[6]))) {
                        $infos = new Infos();
                        $infos->setUser($user); // Relation OneToOne avec User
                        $infos->setRank(trim($data[4])); // Colonne 5 : rank
                        $infos->setVictoire((int) trim($data[5])); // Colonne 6 : victoire
                        $infos->setDefaite((int) trim($data[6]));  // Colonne 7 : defaite

                        // Persistez les infos dans la base de données
                        $entityManager->persist($infos);
                    }
                }
                fclose($handle);

                // Sauvegardez tous les utilisateurs et leurs infos dans la base de données
                $entityManager->flush();

                $this->addFlash('success', 'Importation terminée avec succès.');
                return $this->redirectToRoute('admin_import_csv');
            }

            $this->addFlash('error', 'Erreur lors de la lecture du fichier CSV.');
        }

        return $this->render('admin/import_csv.html.twig');
    }
}
