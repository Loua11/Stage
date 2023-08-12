<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginfacController extends AbstractController
{
    #[Route('/loginfac', name: 'app_loginfac')]
    public function index(): Response
    {
        return $this->render('loginfac/loginfac.html.twig', [
            'controller_name' => 'LoginfacController',
        ]);
    }
}
