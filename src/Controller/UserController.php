<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\UserRepository;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/', name: 'app_user', methods: "GET")]
    public function index(UserRepository $user_repository): Response
    {
        return $this->render('user/index.html.twig', [
            'users' => $user_repository->findAll(),
        ]);
    }

    #[Route('/user_js', name: 'js_user', methods: "GET")]
    public function user_js(UserRepository $user_repository): Response
    {
        return $this->render('user/user.php.twig', [
            'users' => $user_repository->findAll(),
        ]);
    }
}
