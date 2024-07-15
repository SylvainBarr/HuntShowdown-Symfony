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
        $targets = $this->monsterRepository->getMonstersByClassName('Targets');
        $infected = $this->monsterRepository->getMonstersByClassName('Infected');
        $marked = $this->monsterRepository->getMonstersByClassName('Marked');
        $packs = $this->monsterRepository->getMonstersByClassName('Packs');

        return $this->render('front/pages/monster/index.html.twig', [
            'targets' => $targets,
            'infected' => $infected,
            'marked' => $marked,
            'packs' => $packs,
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
