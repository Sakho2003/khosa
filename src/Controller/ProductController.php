<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product; // Importez l'entité Product.

class ProductController extends AbstractController
{
    #[Route('/products', name: 'app_products')]
    public function index(): Response
    {
        // Récupérez les produits depuis la base de données (via Doctrine).
        $products = $this->getDoctrine()->getRepository(Product::class)->findAll();

        // Ensuite, renvoyez les produits à la vue pour les afficher.
        return $this->render('product/index.html.twig', [
            'products' => $products,
        ]);
    }
}
