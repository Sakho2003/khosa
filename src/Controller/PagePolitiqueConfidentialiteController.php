<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagePolitiqueConfidentialiteController extends AbstractController
{
    #[Route('/page/politique/confidentialite', name: 'app_page_politique_confidentialite')]
    public function index(): Response
    {
        return $this->render('page_politique_confidentialite/index.html.twig', [
            'controller_name' => 'PagePolitiqueConfidentialiteController',
        ]);
    }
}
