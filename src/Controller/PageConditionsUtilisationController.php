<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageConditionsUtilisationController extends AbstractController
{
    #[Route('/page/conditions/utilisation', name: 'app_page_conditions_utilisation')]
    public function index(): Response
    {
        return $this->render('page_conditions_utilisation/index.html.twig', [
            'controller_name' => 'PageConditionsUtilisationController',
        ]);
    }
}
