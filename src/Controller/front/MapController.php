<?php

namespace App\Controller\front;

use App\Repository\MapRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/map', name: 'app_map_')]
class MapController extends AbstractController
{
    #[Route('/', name: 'list')]
    public function index(MapRepository $mapRepository): Response
    {
        return $this->render('front/pages/map/index.html.twig', [
            'maps' => $mapRepository->findAll(),
        ]);
    }
}
