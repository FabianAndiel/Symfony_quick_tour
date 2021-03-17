<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Artikel;

class AutomaticController extends AbstractController
{
    /**
     * @Route("/automatic", name="automatic")
     */
    public function index(): Response
    {
        $artikel = new Artikel();
        return $this->render('automatic/index.html.twig', [
            'controller_name' => 'AutomaticController',
        ]);
    }
}
