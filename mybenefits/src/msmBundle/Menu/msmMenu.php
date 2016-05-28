<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace msmBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class msmMenu extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Home', array('route' => 'msm_homepage'));

        $menu->addChild('Sessions', array('route' => 'list_sessions'));
        // you can also add sub level's to your menu's as follows
        $menu['Sessions']->addChild('Create sessions', array('route' => 'create_session1'));

        return $menu;
    }
}

