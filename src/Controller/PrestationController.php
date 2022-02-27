<?php

namespace App\Controller;

use App\Repository\PrestationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PrestationController extends AbstractController
{
    #[Route('/prestations', name: 'app_prestations')]
    public function index(PrestationRepository $prestation): Response
    {
        $user = $this->getUser();
        $prestations = $prestation->findAll();
        
        return $this->render('prestation/index.html.twig', [
            'controller_name' => 'PrestationController',
            'prestations' => $prestations,
            'user' => $user
        ]);
    }
}
