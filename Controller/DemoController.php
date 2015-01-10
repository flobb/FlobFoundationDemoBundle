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
        // DO NOT DISABLE "csrf_protection" @home : it's only to avoid the warning message in the demo
        $form = $this->createForm(new KitchensinkType(), null, array('csrf_protection' => false));
        $form->submit(array());
        $form->addError(new FormError('This is a global form error message.'));
        $form->addError(new FormError('This is another global form error message.'));

        // KNP paginator
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(range(0, 100), $request->query->get('page', 1), 10);

        return $this->render('FlobFoundationDemoBundle:Demo:showcase.html.twig', array(
            'form'          => $form->createView(),
            'pagination'    => $pagination,
        ));
    }
}
