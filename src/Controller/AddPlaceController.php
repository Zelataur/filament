<?php

namespace App\Controller;

use App\Entity\Place;
use App\Form\AddPlaceType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AddPlaceController extends AbstractController
{
    #[Route('/add/place', name: 'app_add_place')]
    public function index(EntityManagerInterface $entityManager, Request $request): Response
    {
        $place = new Place();

        $form = $this->createForm(AddPlaceType::class, $place);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid() && 'label') {

            $entityManager->persist($place);
            $entityManager->flush();
        }

                /* return $this->redirectToRoute('app_add_place'); */

        return $this->render('add_place/add_place.html.twig', [
            /* 'controller_name' => 'AddPlaceController', */
            'addPlaceForm' => $form->createView(),
        ]);
    }
}
