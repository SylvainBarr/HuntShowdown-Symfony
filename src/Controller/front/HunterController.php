<?php

namespace App\Controller\front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/hunter', name: 'app_hunter_')]
class HunterController extends AbstractController
{
    #[Route('/', name: 'list')]
    public function index(): Response
    {
        return $this->render('front/pages/hunter/index.html.twig', [
            'controller_name' => 'HunterController',
        ]);
    }
}
