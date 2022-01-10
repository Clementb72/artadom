<?php

namespace App\Controller;

use App\Entity\Artiste;
use App\Repository\ArtisteRepository;
use Doctrine\Bundle\DoctrineBundle\Registry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArtisteController extends AbstractController
{
    #[Route('/artiste', name: 'artiste')]
    public function index(ArtisteRepository $artiste): Response
    {
        $artistes = $artiste->findAll();
        return $this->render('artiste/index.html.twig', [
            'controller_name' => 'ArtisteController',
            'artiste' => $artistes
        ]);
    }
}
