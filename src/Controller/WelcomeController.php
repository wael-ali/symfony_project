<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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
     * @Route(
     *       "/hello_page/{name}",
     *       name="hello_page",
     *       defaults={"name" = "you there"},
     *       requirements={"name" = "[A-Za-z]+"}
     *  )
     * @return \Symfony\Components\HttpFoundation\Response
     */
    public function hello($name)
    {
        
        return $this->render(
            'welcome/hello_page.html.twig',
            [
                'controller_name' => 'WelcomeController',
                'some_variable' => 'any thing',
                'name' => $name
            ]
        );
    }
}
