<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EnSavoirPlusController extends AbstractController
{
    #[Route('/en/savoir/plus', name: 'app_en_savoir_plus')]
    public function index(): Response
    {
        return $this->render('en_savoir_plus/index.html.twig', [
            'controller_name' => 'EnSavoirPlusController',
        ]);
    }
}
