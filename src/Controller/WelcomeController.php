<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller
{
    /**
     * @Route("/welcome", name="welcome")
     */
    public function index()
    {
        return $this->render('welcome/index.html.twig', [
            'controller_name' => 'WelcomeController',
        ]);

        // return $this->render(view: 'welcome/index.html.twig');
    }

    /**
     * @Route("/hello_page", name="hello_page")
     */
    public function hello()
    {
        return $this->render('welcome/hello_page.html.twig', ['controller_name' => 'WelcomeController',]);
    }
}
