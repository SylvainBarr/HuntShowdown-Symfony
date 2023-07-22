<?php

namespace App\Controller\front;

use App\Repository\MonsterRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/monster', name: 'app_monster_')]
class MonsterController extends AbstractController
{

    public function __construct(
        private MonsterRepository $monsterRepository,
    )
    {
    }

    #[Route('/', name: 'list')]
    public function index(): Response
    {
        return $this->render('front/pages/monster/index.html.twig', [
            'monsters' => $this->monsterRepository->findAll(),
        ]);
    }


    #[Route('/{slug}', name: 'show')]
    public function show(string $slug): Response
    {
        $monster = $this->monsterRepository->findOneBy(['slug' => $slug]);

        return $this->render('front/pages/monster/show.html.twig', [
            'monster' => $monster,
        ]);
    }
}
