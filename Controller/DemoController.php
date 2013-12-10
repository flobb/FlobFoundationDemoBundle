<?php

namespace FlorianBelhomme\Bundle\FoundationDemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use FlorianBelhomme\Bundle\FoundationDemoBundle\Form\Type\KitchensinkType;

class DemoController extends Controller
{
    public function kitchensinkAction(Request $request)
    {
        $form = $this->createForm(new KitchensinkType());
        
        $form->bind(array(
            'radio'             => 3,
            'checkbox_disabled' => array(1)
        ));
        $form->addError(new FormError('This is a global form error message.'));
        $form->addError(new FormError('This is another global form error message.'));
        
        return $this->render('FlorianBelhommeFoundationBundle:Demo:kitchensink.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
