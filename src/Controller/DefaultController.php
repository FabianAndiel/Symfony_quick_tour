<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends AbstractController
{
    /**
     * @Route("/hello/{name}")
     */
    public function index($name, LoggerInterface $logger)
    {
        return new Response('Hello!'.$name);
        $logger->info("Ran index function at");
        return $this->render('default/index.html.twig', [
                        'name' => $name,
                    ]);
    }

    /**
     * @Route("/simple/")
     */
    public function simple(Request $request)
    {
        return new Response('Really simple '.$request);
    }

    #[Route('/testAttr/', name: 'testAttr')]
    public function list()
    {

        return new Response('Reallyssss simple');
    }



}

    