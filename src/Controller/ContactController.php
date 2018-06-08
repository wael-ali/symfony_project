<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends Controller
{
    /**
     * @Route("/contact", name="contact")
     */
    public function contact(Request $request)
    {
        // return $this->render('contact/index.html.twig', [
        //     'controller_name' => 'ContactController',
        // ]);
      $form = $this->createForm(ContactType::class);
      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {
        $contactFormData = $form->getData();
        dump($contactFormData);
        // do something here ---
      }

      return $this->render('contact/contact.html.twig', [
          'our_form' => $form->createView(),
        ]);
    }
}
