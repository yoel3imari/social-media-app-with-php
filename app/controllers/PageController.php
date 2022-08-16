<?php

namespace App\Controllers;

use App\Models\Post;
use App\Models\User;
use Symfony\Component\Routing\RouteCollection;
use App\Utilities;

class PageController
{
    public function home(RouteCollection $routes)
    {
        # code...
        if (isset($_COOKIE["UID"])) {
            require_once PAGE_PATH . 'home.php';
            var_dump($_SESSION["current_user"]);
            var_dump($_COOKIE["UID"]);
        } else {
            Utilities::getHimTo("account/login");
        }
    }

    public function profile(string $username, RouteCollection $routes)
    {
        # code...
        var_dump($username);
        require_once PAGE_PATH . 'profile.php';
    }

    public function setting(string $username, RouteCollection $routes)
    {
        # edit user info
        var_dump($username);
        require_once PAGE_PATH . 'setting.php';
    }

    public function login(RouteCollection $routes)
    {
        require_once PAGE_PATH . 'login.php';
    }

    public function sign(RouteCollection $routes)
    {
        # edit user info
        require_once PAGE_PATH . 'sign.php';
    }
}
