<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OfficesController extends AbstractController
{
    #[Route('/offices', name: 'app_offices')]
    public function index(): Response
    {
        return $this->render('offices/index.html.twig', [
            'controller_name' => 'OfficesController',
        ]);
    }
}
