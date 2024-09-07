<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Form\RegisterUserType;
use Symfony\Component\Routing\Attribute\Route;

class RegisterController extends AbstractController
{
    #[Route('/inscription', name: 'app_register')]
    public function index(): Response
    {

        $form = $this->createForm(RegisterUserType::class);

        return $this->render('register/index.html.twig',[
            'registerForm' => $form->createView()
        ]);
    }
}
