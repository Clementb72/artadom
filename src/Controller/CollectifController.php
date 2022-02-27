<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CollectifController extends AbstractController
{
    #[Route('/collectif', name: 'app_collectif')]
    public function index(): Response
    {
        return $this->render('collectif/index.html.twig', [
            'controller_name' => 'CollectifController',
        ]);
    }
}
