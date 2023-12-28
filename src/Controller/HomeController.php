<?php

namespace App\Controller;

use App\Repository\SettingsRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(SettingsRepository $settingsRepository): Response
    {
        $data = $settingsRepository->findOneBy(['id'=>1]);
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'data' => $data
        ]);
    }

    //  #[Route('/loginuser', name: 'login_user')]
    // public function user_login(SettingsRepository $settingsRepository): Response
    // {
    //     $data = $settingsRepository->findOneBy(['id'=>1]);
    //     return $this->render('security/userlogin.html.twig', [
    //         'controller_name' => 'HomeController',
    //         'data' => $data
    //     ]);
    // }
    #[Route('/comments', name: 'app_comments', methods: ['GET'])]
    public function comments(SettingsRepository $settingsRepository): Response
    {
        $data = $settingsRepository->findOneBy(['id'=>1]);
        return $this->render('home/comments.html.twig', [
            'data' => $data
        ]);
    }
    #[Route('/hotels', name: 'app_hotels', methods: ['GET'])]
    public function hotels(SettingsRepository $settingsRepository): Response
    {
        $data = $settingsRepository->findOneBy(['id'=>1]);
        return $this->render('home/hotels.html.twig', [
            'data' => $data
        ]);
    }
    #[Route('/reservations', name: 'app_reservations', methods: ['GET'])]
    public function reservations(SettingsRepository $settingsRepository): Response
    {
        $data = $settingsRepository->findOneBy(['id'=>1]);
        return $this->render('home/reservations.html.twig', [
            'data' => $data
        ]);
    }
}
