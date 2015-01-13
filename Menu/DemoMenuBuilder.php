<?php

namespace Flob\Bundle\FoundationDemoBundle\Menu;

use Knp\Menu\FactoryInterface;

class DemoMenuBuilder
{
    public function main(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('Home', array('route' => 'showcase_homepage', 'extras' => array('menu_type' => 'topmenu')));

        $subitem4 = $factory->createItem('Sub item 4', array('route' => 'showcase_level1'));
        $subitem4->addChild('Level two');
        $subitem4->addChild('Sub sub item 1', array('route' => 'showcase_level2'));
        $subitem4->addChild('Sub sub item 2', array('route' => 'showcase_level2'));
        $subitem4->addChild('Sub sub item 3', array('route' => 'showcase_level2'));

        $item1 = $factory->createItem('Item 1', array('extras' => array('divider_append' => true)));
        $item1->addChild('Level one');
        $item1->addChild('Sub item 1', array('route' => 'showcase_level1'));
        $item1->addChild('Sub item 2', array('route' => 'showcase_level1'));
        $item1->addChild('Sub item 3', array('route' => 'showcase_level1', 'extras' => array('divider_append' => true)));
        $item1->addChild('Sub title');
        $item1->addChild($subitem4);
        $item1->addChild('Sub item 5', array('route' => 'showcase_level1'));
        $item1->addChild('Sub item 6', array('route' => 'showcase_level1'));
        $menu->addChild($item1);

        $item2 = $factory->createItem('Item 2', array('extras' => array('divider_append' => true)));
        $item2->addChild('Sub item 1', array('route' => 'showcase_level1'));
        $item2->addChild('Sub item 2', array('route' => 'showcase_level1'));
        $item2->addChild('Sub item 3', array('route' => 'showcase_level1'));
        $menu->addChild($item2);

        $item3 = $factory->createItem('Item 3', array('extras' => array('divider_append' => true)));
        $item3->addChild('Sub item 1', array('route' => 'showcase_level1'));
        $item3->addChild('Sub item 2', array('route' => 'showcase_level1'));
        $item3->addChild('Sub item 3', array('route' => 'showcase_level1'));
        $menu->addChild($item3);

        $user = $factory->createItem('User menu');
        $user->setAttribute('class', 'right');
        $user->addChild('Sub item 1', array('route' => 'showcase_level1'));
        $user->addChild('Sub item 2', array('route' => 'showcase_level1'));
        $user->addChild('Sub item 3', array('route' => 'showcase_level1'));
        $menu->addChild($user);

        return $menu;
    }

    public function sidebar(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('home', array('extras' => array('menu_type' => 'sidebar')));

        $menu->addChild('Sub item 1', array('route' => 'showcase_homepage'));
        $menu->addChild('Sub item 2', array('route' => 'showcase_homepage'));
        $menu->addChild('Sub item 3', array('route' => 'showcase_homepage', 'extras' => array('divider_append' => true)));
        $menu->addChild('Sub item 5', array('route' => 'showcase_homepage'));
        $menu->addChild('Sub item 6', array('route' => 'showcase_homepage'));

        return $menu;
    }
}
