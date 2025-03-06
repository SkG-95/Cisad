<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class RegisterController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $passwordHasher, EntityManagerInterface $entityManager): Response
    {
        // Créer une nouvelle instance de l'entité User
        $user = new User();

        // Créer le formulaire d'inscription
        $form = $this->createForm(RegistrationFormType::class, $user);

        // Traiter la soumission du formulaire
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Hacher le mot de passe
            $hashedPassword = $passwordHasher->hashPassword(
                $user,
                $form->get('plainPassword')->getData() // Récupérer le mot de passe en clair
            );
            $user->setPassword($hashedPassword);

            // Définir un rôle par défaut (par exemple, ROLE_USER)
            $user->setRoles(["ROLE_USER"]);

            // Enregistrer l'utilisateur dans la base de données
            $entityManager->persist($user);
            $entityManager->flush();

            // Rediriger l'utilisateur après l'inscription
            return $this->redirectToRoute('app_user_index'); // Remplacez 'app_home' par la route de votre choix
        }

        // Afficher le formulaire dans le template
        return $this->render('register/index.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}