<?php

namespace Flob\Bundle\FoundationDemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Flob\Bundle\FoundationDemoBundle\Form\Type\KitchensinkType;

class DemoController extends Controller
{
    public function showcaseAction(Request $request)
    {
        // Demo form to show all potential
        $form = $this->createForm(new KitchensinkType());/*
        $form->submit(array(
            'textDisabled'      => 'Disabled text',
            'radio'             => 3,
            'checkbox_disabled' => array(1),
            'switch_radio'      => 3
        ));
        $form->addError(new FormError('This is a global form error message.'));
        $form->addError(new FormError('This is another global form error message.'));
*/
        // KNP paginator
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(range(0, 100), $this->get('request')->query->get('page', 1), 10);

        return $this->render('FlobFoundationDemoBundle:Demo:showcase.html.twig', array(
            'form'          => $form->createView(),
            'pagination'    => $pagination
        ));
    }
}
