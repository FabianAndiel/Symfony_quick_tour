<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ThridAutomaticController extends AbstractController
{
    /**
     * @Route("/thrid/automatic", name="thrid_automatic")
     */
    public function index(): Response
    {
        $d = date("l");
        $user = [
            'firstname'=> 'Fabian',
            'lastname'=> 'Andiel',
            'password'=>'1234'
        ];

        $wochentage = array("Sonntag","Montag","Dienstag",
        "Mittwoch","Donnerstag","Freitag","Samstag");
        
        return $this->render('thrid_automatic/index.html.twig', [
            'd' => $d,
            'user'=> $user,
            'weekdays' => $wochentage
        ]);
    }
}
