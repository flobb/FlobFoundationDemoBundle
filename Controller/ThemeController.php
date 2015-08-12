<?php

namespace Flob\Bundle\FoundationDemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ThemeController extends Controller
{
    public function showcaseAction()
    {
        return $this->render('FlobFoundationDemoBundle:Theme:showcase.html.twig', []);
    }
}
