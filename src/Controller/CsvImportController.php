<?php 

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CsvImportController extends AbstractController
{
    #[Route('/admin/import-csv', name: 'admin_import_csv', methods: ['GET', 'POST'])]
    public function importCsv(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Vérifiez si un fichier a été envoyé via le formulaire
        $file = $request->files->get('csv_file');
        if ($request->isMethod('POST') && $file) {
            if (($handle = fopen($file->getPathname(), 'r')) !== false) {
                $header = fgetcsv($handle); // Lire la première ligne comme en-tête (facultatif)
                while (($data = fgetcsv($handle, 1000, ',')) !== false) {
                    // Créez un nouvel utilisateur pour chaque ligne du fichier
                    $user = new User();
                    $user->setUsername($data[0]); // Colonne 1 : username
                    $user->setEmail($data[1]);    // Colonne 2 : email
                    $user->setPassword(password_hash($data[2], PASSWORD_BCRYPT)); // Colonne 3 : password
                    $user->setRoles(['ROLE_ADMIN']); // Rôle par défaut

                    // Persistez l'utilisateur dans la base de données
                    $entityManager->persist($user);
                }
                fclose($handle);

                // Sauvegardez tous les utilisateurs dans la base de données
                $entityManager->flush();

                $this->addFlash('success', 'Importation terminée avec succès.');
                return $this->redirectToRoute('admin_import_csv');
            }

            $this->addFlash('error', 'Erreur lors de la lecture du fichier CSV.');
        }

        return $this->render('admin/import_csv.html.twig');
    }
}
