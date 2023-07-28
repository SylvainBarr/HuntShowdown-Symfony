<?php

namespace App\Controller\front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/equipment', name: 'app_equipment_')]
class EquipmentController extends AbstractController
{
    #[Route('/', name: 'list')]
    public function index(): Response
    {
        return $this->render('front/pages/equipment/index.html.twig', [
            'controller_name' => 'EquipmentController',
        ]);
    }
}
