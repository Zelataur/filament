<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductsController extends AbstractController
{
    #[Route('/products', name: 'app_products')]
    public function index(): Response
    {
        //Renvoi de la vue de la liste des produits
        return $this->render('products/products.html.twig', [
            'controller_name' => 'ProductsController',
        ]);
    }
}
