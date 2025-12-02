<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class StanController extends AbstractController
{
    #[Route('/', name: 'app_stan')]
    public function index(): Response
    {
        return $this->render('stan/index.html.twig', [
            'controller_name' => 'StanController',
        ]);
    }

    #[Route('/cv', name: 'app_cv')]
    public function cv(): Response
    {
        return $this->render('stan/cv.html.twig', [
            'controller_name' => 'StanController',
        ]);
    }
    
    #[Route('/contacte', name: 'app_contacte')]
    public function contacte(): Response
    {
        return $this->render('stan/contacte.html.twig', [
            'controller_name' => 'StanController',
        ]);
    }

    #[Route('/Administrer', name: 'app_administrer')]
    public function administrer(): Response
    {
        return $this->render('competence/administrer/administrer.html.twig', [
            'controller_name' => 'StanController',
        ]);
    }

    #[Route('/Programmer', name: 'app_programmer')]
    public function programmer(): Response
    {
        return $this->render('competence/programmer/programmer.html.twig', [
            'controller_name' => 'StanController',
        ]);
    }

    #[Route('/Connecter', name: 'app_connecter')]
    public function connecter(): Response
    {
        return $this->render('competence/connecter/connecter.html.twig', [
            'controller_name' => 'StanController',
        ]);
    }

    #[Route('/Connecter', name: 'app_moi')]
    public function moi(): Response
    {
        return $this->render('stan/moi.html.twig', [
            'controller_name' => 'StanController',
        ]);
    }
}
