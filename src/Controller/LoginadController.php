<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginadController extends AbstractController
{
    #[Route('/loginad', name: 'app_loginad')]
    public function index(): Response
    {
        return $this->render('loginad/loginad.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
}
