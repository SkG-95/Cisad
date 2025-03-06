<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class ProfilController extends AbstractController
{
    #[IsGranted('ROLE_USER')]
    #[Route('/profil', name: 'app_profil')]
    public function index(): Response
    {
        // Récupérer l'utilisateur connecté
        $user = $this->getUser();

        // Vérifier si l'utilisateur est connecté
        if (!$user instanceof UserInterface) {
            return $this->redirectToRoute('app_login');
        }

        // Passer les informations de l'utilisateur au template
        return $this->render('profil/index.html.twig', [
            'user' => $user,
        ]);
    }
}
