<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageMentionsLégalesController extends AbstractController
{
    #[Route('/page/mentions/l/gales', name: 'app_page_mentions_l_gales')]
    public function index(): Response
    {
        return $this->render('page_mentions_légales/index.html.twig', [
            'controller_name' => 'PageMentionsLégalesController',
        ]);
    }
}
