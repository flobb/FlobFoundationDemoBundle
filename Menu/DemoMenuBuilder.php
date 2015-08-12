<?php

namespace Flob\Bundle\FoundationDemoBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class DemoMenuBuilder extends ContainerAware
{
    public function main(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('Home', ['route' => 'showcase_homepage', 'extras' => ['menu_type' => 'topbar']]);

        $subitem4 = $factory->createItem('Sub item 4', ['route' => 'showcase_level1']);
        $subitem4->addChild('Level two');
        $subitem4->addChild('Sub sub item 1', ['route' => 'showcase_level2']);
        $subitem4->addChild('Sub sub item 2', ['route' => 'showcase_level2']);
        $subitem4->addChild('Sub sub item 3', ['route' => 'showcase_level2']);

        $item1 = $factory->createItem('Item 1', ['extras' => ['divider_append' => true]]);
        $item1->addChild('Level one');
        $item1->addChild('Sub item 1', ['route' => 'showcase_level1']);
        $item1->addChild('Sub item 2', ['route' => 'showcase_level1']);
        $item1->addChild('Sub item 3', ['route' => 'showcase_level1', 'extras' => ['divider_append' => true]]);
        $item1->addChild('Sub title');
        $item1->addChild($subitem4);
        $item1->addChild('Sub item 5', ['route' => 'showcase_level1']);
        $item1->addChild('Sub item 6', ['route' => 'showcase_level1']);
        $menu->addChild($item1);

        $item2 = $factory->createItem('Item 2', ['extras' => ['divider_append' => true]]);
        $item2->addChild('Sub item 1', ['route' => 'showcase_level1']);
        $item2->addChild('Sub item 2', ['route' => 'showcase_level1']);
        $item2->addChild('Sub item 3', ['route' => 'showcase_level1']);
        $menu->addChild($item2);

        $item3 = $factory->createItem('Item 3', ['extras' => ['divider_append' => true]]);
        $item3->addChild('Sub item 1', ['route' => 'showcase_level1']);
        $item3->addChild('Sub item 2', ['route' => 'showcase_level1']);
        $item3->addChild('Sub item 3', ['route' => 'showcase_level1']);
        $menu->addChild($item3);

        $user = $factory->createItem('User menu');
        $user->setAttribute('class', 'right');
        $user->addChild('Sub item 1', ['route' => 'showcase_level1']);
        $user->addChild('Sub item 2', ['route' => 'showcase_level1']);
        $user->addChild('Sub item 3', ['route' => 'showcase_level1']);
        $menu->addChild($user);

        return $menu;
    }

    public function sidebar(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('home', ['extras' => ['menu_type' => 'sidebar']]);

        $menu->addChild('Sub item 1', ['route' => 'showcase_homepage']);
        $menu->addChild('Sub item 2', ['route' => 'showcase_homepage']);
        $menu->addChild('Sub item 3', ['route' => 'showcase_homepage', 'extras' => ['divider_append' => true]]);
        $menu->addChild('Sub item 5', ['route' => 'showcase_homepage']);
        $menu->addChild('Sub item 6', ['route' => 'showcase_homepage']);

        return $menu;
    }
}
