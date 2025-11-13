<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class StanController extends AbstractController
{
    #[Route('/stan', name: 'app_stan')]
    public function index(): Response
    {
        return $this->render('stan/index.html.twig', [
            'controller_name' => 'StanController',
        ]);
    }
}
