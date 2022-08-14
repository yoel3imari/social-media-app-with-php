<?php

namespace App\Controllers;

use App\Models\Post;
use App\Models\User;
use Symfony\Component\Routing\RouteCollection;

class PageController
{
    public function home(RouteCollection $routes)
    {
        # code...
        require_once APP_ROOT . '\app\views\home.php';
    }

    public function profile(RouteCollection $routes)
    {
        # code...
        require_once APP_ROOT . '/app/views/profile.php';
    }

    public function setting(RouteCollection $routes)
    {
        # edit user info
        require_once APP_ROOT . '/app/views/setting.php';
    }

    public function login(RouteCollection $routes)
    {
        # edit user info
        require_once APP_ROOT . '/app/views/login.php';
    }

    public function sign(RouteCollection $routes)
    {
        # edit user info
        require_once APP_ROOT . '/app/views/sign.php';
    }
}
