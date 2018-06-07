<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        // return $this->render('contact/index.html.twig', [
        //     'controller_name' => 'ContactController',
        // ]);
      $form = $this->createForm(ContactType::class);

      return $this->render('contact/contact.html.twig', [
          'our_form' => $form->createView(),
        ]);
    }
}
