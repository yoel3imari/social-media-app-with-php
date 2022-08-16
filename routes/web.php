<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// routing system

$routes = new RouteCollection();

// Pages Routing

$routes->add(
    'root',
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
    'setting',
    new Route(
        constant('URL_SUBFOLDER') . '/account/setting',
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
        constant('URL_SUBFOLDER') . '/account/login',
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
        constant('URL_SUBFOLDER') . '/account/sign',
        array(
            'controller' => 'PageController',
            'method'=>'sign'
        ),
        array()
    )
);

$routes->add(
    'profile',
    new Route(
        constant('URL_SUBFOLDER') . '/profile/{username}',
        array(
            'controller' => 'PageController',
            'method'=>'profile'
        ),
        array('username' => '^[A-Za-z0-9_]{1,9}$')
    )
);

// User Routing

$routes->add(
    'verify_login',
    new Route(
        constant('URL_SUBFOLDER') . '/account/login/user',
        array(
            'controller' => 'UserController',
            'method'=>'login'
        ),
        array()
    )
);

// Post Routing