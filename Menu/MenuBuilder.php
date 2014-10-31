<?php

namespace Flob\Bundle\FoundationDemoBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\HttpFoundation\Request;

class MenuBuilder
{
    protected $factory = null;

    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function createTopMenu()
    {
        $menu = $this->factory->createItem('Home', array('route' => 'showcase_homepage', 'extras' => array('menu_type' => 'topmenu')));

        $subitem4 = $this->factory->createItem('Sub item 4', array('route' => 'showcase_level1'));
        $subitem4->addChild('Level two', array('route' => 'showcase_level2'));
        $subitem4->addChild('Sub sub item 1', array('route' => 'showcase_level1'));
        $subitem4->addChild('Sub sub item 2', array('route' => 'showcase_level1'));
        $subitem4->addChild('Sub sub item 3', array('route' => 'showcase_level1'));

        $item1 = $this->factory->createItem('Item 1', array());
        $item1->addChild('Level one', array());
        $item1->addChild('Sub item 1', array('route' => 'showcase_level1'));
        $item1->addChild('Sub item 2', array('route' => 'showcase_level1'));
        $item1->addChild('Sub item 3', array('route' => 'showcase_level1', 'extras' => array('divider_append' => true)));
        $item1->addChild('Sub title', array());
        $item1->addChild($subitem4);
        $item1->addChild('Sub item 5', array('route' => 'showcase_level1'));
        $item1->addChild('Sub item 6', array('route' => 'showcase_level1'));
        $menu->addChild($item1);

        $item2 = $this->factory->createItem('Item 2', array('extras' => array('divider_append' => true)));
        $item2->addChild('Sub item 1', array('route' => 'showcase_level1'));
        $item2->addChild('Sub item 2', array('route' => 'showcase_level1'));
        $item2->addChild('Sub item 3', array('route' => 'showcase_level1'));
        $menu->addChild($item2);

        $item3 = $this->factory->createItem('Item 3');
        $item3->addChild('Sub item 1', array('route' => 'showcase_level1'));
        $item3->addChild('Sub item 2', array('route' => 'showcase_level1'));
        $item3->addChild('Sub item 3', array('route' => 'showcase_level1'));
        $menu->addChild($item3);

        $user = $this->factory->createItem('User menu');
        $user->setAttribute('class', 'right');
        $user->addChild('Sub item 1', array('route' => 'showcase_level1'));
        $user->addChild('Sub item 2', array('route' => 'showcase_level1'));
        $user->addChild('Sub item 3', array('route' => 'showcase_level1'));
        $menu->addChild($user);

        return $menu;
    }

    public function createSidebar()
    {
        $menu = $this->factory->createItem('home', array('extras' => array('menu_type' => 'sidebar')));

        $menu->addChild('Sub item 1', array('route' => 'showcase_homepage'));
        $menu->addChild('Sub item 2', array('route' => 'showcase_homepage'));
        $menu->addChild('Sub item 3', array('route' => 'showcase_homepage', 'extras' => array('divider_append' => true)));
        $menu->addChild('Sub item 5', array('route' => 'showcase_homepage'));
        $menu->addChild('Sub item 6', array('route' => 'showcase_homepage'));

        return $menu;
    }
}
