<?php

namespace App\Controller;

use App\Entity\Artiste;
use App\Entity\Prestation;
use App\Repository\ArtisteRepository;
use Doctrine\Bundle\DoctrineBundle\Registry;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArtisteController extends AbstractController
{
    #[Route('/artiste', name: 'app_artistes')]
    public function index(ArtisteRepository $artiste): Response
    {
        $user = $this->getUser();
        $artistes = $artiste->findAll();
        return $this->render('artiste/index.html.twig', [
            'controller_name' => 'ArtisteController',
            'artiste' => $artistes,
            'user' => $user
        ]);
    }

    #[Route('/artiste/&id={id}', name: 'app_infos_artiste')]
    public function infos($id, EntityManagerInterface $entityManager): Response
    {
        $artiste = $entityManager->getRepository(Artiste::class)->find($id);
        $prestations = $entityManager->getRepository(Prestation::class)->findBy(['id_artiste' => $id]);
        return $this->render('artiste/infos.html.twig', [
            'controller_name' => 'ArtisteController',
            'artiste' => $artiste,
            'prestations' => $prestations,
        ]);
    }
}
