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
}
