<?php

namespace Flob\Bundle\FoundationDemoBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class ThemeMenuBuilder
{
    use ContainerAwareTrait;

    public function topbar(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('Home',
            [
                'uri' => '#',
                'extras' => ['menu_type' => 'topbar'],
            ]
        );

        $logout = $factory->createItem('logout',
            [
                'uri' => '#',
                'attributes' => ['class' => 'right'],
                'extras' => [
                    'icon' => 'fa-power-off',
                    'icon_position' => 'no-label',
                ],
            ]
        );
        $menu->addChild($logout);

        $notification = $factory->createItem('notification',
            [
                'uri' => '#',
                'attributes' => ['class' => 'right'],
                'extras' => [
                    'icon' => 'fa-bell-o',
                    'icon_position' => 'no-label',
                ],
            ]
        );
        $menu->addChild($notification);

        $logout = $factory->createItem('John Doe',
            [
                'uri' => '#',
                'attributes' => ['class' => 'right'],
                'extras' => ['icon' => 'fa-user'],
            ]
        );
        $menu->addChild($logout);

        return $menu;
    }

    public function sidebar(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('Home',
            [
                'uri' => '#',
                'extras' => [
                    'menu_type' => 'sidebar',
                ],
            ]
        );

        $menu->addChild($factory->createItem('Dashboard', ['uri' => '#', 'extras' => ['icon' => 'fa-home']]));

        $pages = $factory->createItem('Pages', ['uri' => '#', 'extras' => ['icon' => 'fa-files-o']]);
        $pages->addChild($factory->createItem('Basic', ['uri' => '#', 'extras' => ['icon' => 'fa-file-o']]));
        $pages->addChild($factory->createItem('Login', ['uri' => '#', 'extras' => ['icon' => 'fa-file-o']]));
        $pages->addChild($factory->createItem('Timeline / Activity', ['uri' => '#', 'extras' => ['icon' => 'fa-file-o']]));
        $pages->addChild($factory->createItem('List', ['uri' => '#', 'extras' => ['icon' => 'fa-file-o']]));
        $pages->addChild($factory->createItem('Form', ['uri' => '#', 'extras' => ['icon' => 'fa-file-o']]));
        $pages->addChild($factory->createItem('FAQ', ['uri' => '#', 'extras' => ['icon' => 'fa-file-o']]));
        $pages->addChild($factory->createItem('Error', ['uri' => '#', 'extras' => ['icon' => 'fa-file-o']]));
        $menu->addChild($pages);

        $menu->addChild($factory->createItem('UI Elements', ['uri' => '#', 'extras' => ['icon' => 'fa-th-large']]));
        $menu->addChild($factory->createItem('Form Elements', ['uri' => '#', 'extras' => ['icon' => 'fa-server']]));

        for ($i = 0; $i < 10; ++$i) {
            ${'entry'.$i} = $factory->createItem('Entry '.$i, ['uri' => '#']);
            if ($i != 0) {
                ${'entry'.($i - 1)}->addChild(${'entry'.$i});
            }
        }
        $deep = $factory->createItem('Deep Menu', ['uri' => '#', 'extras' => ['icon' => 'fa-leaf']]);
        $deep->addChild($entry0);
        $menu->addChild($deep);

        return $menu;
    }
}
