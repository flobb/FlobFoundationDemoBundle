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
        $menu = $this->factory->createItem('root', array('extras' => array('menu_type' => 'topmenu')));
        
        $user = $this->factory->createItem('User menu');
        $user->setAttribute('class', 'right');
        $user->addChild('Sub item 1', array('uri' => '/'));
        $user->addChild('Sub item 2', array('uri' => '/'));
        $user->addChild('Sub item 3', array('uri' => '/'));
        $menu->addChild($user);
        
        $subitem4 = $this->factory->createItem('Sub item 4', array());
        $subitem4->addChild('Level two', array());
        $subitem4->addChild('Sub sub item 1', array('uri' => '/'));
        $subitem4->addChild('Sub sub item 2', array('uri' => '/'));
        $subitem4->addChild('Sub sub item 3', array('uri' => '/'));
        
        $item1 = $this->factory->createItem('Item 1', array());
        $item1->addChild('Level one', array());
        $item1->addChild('Sub item 1', array('uri' => '/'));
        $item1->addChild('Sub item 2', array('uri' => '/'));
        $item1->addChild('Sub item 3', array('uri' => '/', 'extras' => array('divider_append' => true)));
        $item1->addChild('Sub title', array());
        $item1->addChild($subitem4);
        $item1->addChild('Sub item 5', array('uri' => '/'));
        $item1->addChild('Sub item 6', array('uri' => '/'));
        $menu->addChild($item1);
        
        $item2 = $this->factory->createItem('Item 2', array('extras' => array('divider_append' => true)));
        $item2->addChild('Sub item 1', array('uri' => '/'));
        $item2->addChild('Sub item 2', array('uri' => '/'));
        $item2->addChild('Sub item 3', array('uri' => '/'));
        $menu->addChild($item2);
        
        $item3 = $this->factory->createItem('Item 3');
        $item3->addChild('Sub item 1', array('uri' => '/'));
        $item3->addChild('Sub item 2', array('uri' => '/'));
        $item3->addChild('Sub item 3', array('uri' => '/'));
        $menu->addChild($item3);
        
        return $menu;
    }
    
    public function createSidebar(Request $request)
    {
        $menu = $this->factory->createItem('root', array('extras' => array('menu_type' => 'sidebar')));
        
        $menu->addChild('Sub item 1', array('uri' => '/'));
        $menu->addChild('Sub item 2', array('uri' => '/'));
        $menu->addChild('Sub item 3', array('uri' => '/', 'extras' => array('divider_append' => true)));
        $menu->addChild('Sub item 5', array('uri' => '/'));
        $menu->addChild('Sub item 6', array('uri' => '/'));
        
        return $menu;
    }
}