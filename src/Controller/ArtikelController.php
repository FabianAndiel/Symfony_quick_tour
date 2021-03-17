<?php

namespace App\Controller;

use App\Entity\Artikel;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArtikelController extends AbstractController
{
    /**
     * @Route("/artikel", name="artikel")
     */
    public function index(): Response
    {
        $artikel = new Artikel();
        $artikel->setTitel("Unser erster Artikel"); 

        // Transportieren via entity manager

         $em = $this->getDoctrine()->getManager();
        // $em->persist($artikel);

        // Immer erst am Ende einer Reihe von Entity Manager Commandos
        // $em->flush();

        $getArtikel = $em->getRepository(Artikel::class)->findOneBy([
            'id'=>1
        ]);
         
        $em->remove($getArtikel);
        $em->flush();

        return $this->render('artikel/index.html.twig', [
            'artikel' => $getArtikel,
        ]);
    }
}
