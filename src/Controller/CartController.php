<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CartController extends AbstractController
{
    #[Route('/cart', name: 'app_cart')]
    public function index(): Response
    {
        //Retourne la vue relative au panier d'achat
        return $this->render('cart/cart.html.twig', [
            'controller_name' => 'CartController',
        ]);
    }
}
