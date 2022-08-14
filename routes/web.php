<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// routing system

$routes = new RouteCollection();

// Pages Routing

$routes->add(
    'home',
    new Route(
        constant('URL_SUBFOLDER') . '/',
        array(
            'controller' => 'PageController',
            'method'=>'home'
        ),
        array()
    )
);

$routes->add(
    'home',
    new Route(
        constant('URL_SUBFOLDER') . '/home',
        array(
            'controller' => 'PageController',
            'method'=>'home'
        ),
        array()
    )
);

$routes->add(
    'profile',
    new Route(
        constant('URL_SUBFOLDER') . '/profile',
        array(
            'controller' => 'PageController',
            'method'=>'profile'
        ),
        array('username' => '^[A-Za-z0-9_]{1,9}$')
    )
);

$routes->add(
    'setting',
    new Route(
        constant('URL_SUBFOLDER') . '/setting/{username}',
        array(
            'controller' => 'PageController',
            'method'=>'setting'
        ),
        array('username' => '^[A-Za-z0-9_]{1,9}$')
    )
);

$routes->add(
    'login',
    new Route(
        constant('URL_SUBFOLDER') . '/login',
        array(
            'controller' => 'PageController',
            'method'=>'login'
        ),
        array()
    )
);

$routes->add(
    'sign',
    new Route(
        constant('URL_SUBFOLDER') . '/sign',
        array(
            'controller' => 'PageController',
            'method'=>'sign'
        ),
        array()
    )
);

// User Routing

// Post Routing