<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginetuController extends AbstractController
{
    #[Route('/loginetu', name: 'app_loginetu')]
    public function index(): Response
    {
        return $this->render('login/loginetu.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }
}
