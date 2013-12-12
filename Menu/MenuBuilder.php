<?php

namespace FlorianBelhomme\Bundle\FoundationDemoBundle\Menu;

use Symfony\Component\HttpFoundation\Request;

use Knp\Menu\FactoryInterface;

class MenuBuilder
{
    
    private $factory;

    /**
     * @param FactoryInterface $factory
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function createTopMenu(Request $request)
    {
        $menu = $this->factory->createItem('root');

        $menu->addChild('Home', array('route' => 'fb_foundation_demo'));

        return $menu;
    }
}