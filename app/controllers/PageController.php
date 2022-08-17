<?php

namespace App\Controllers;

use App\Models\User;
use Symfony\Component\Routing\RouteCollection;

class PageController
{
    public function home(RouteCollection $routes)
    {
        # code...
        $_SESSION["error"] = "";
        if (isset($_COOKIE["UID"]) and !empty($_COOKIE["UID"])) {
            $user = (User::get_instance())->read($_COOKIE["UID"], ["name", "bio", "age", "picture", "started_at"]);
            var_dump($user);
            require_once PAGE_PATH . 'home.php';
        } else {
            require_once PAGE_PATH . 'login.php';
        }
    }

    public function profile(string $username, RouteCollection $routes)
    {
        # code...
        $_SESSION["error"] = "";
        var_dump($username);
        require_once PAGE_PATH . 'profile.php';
    }

    public function setting(string $username, RouteCollection $routes)
    {
        # edit user info
        $_SESSION["error"] = "";
        var_dump($username);
        require_once PAGE_PATH . 'setting.php';
    }

    public function login(RouteCollection $routes)
    {
        $_SESSION["error"] = "";
        require_once PAGE_PATH . 'login.php';
    }

    public function sign(RouteCollection $routes)
    {
        $_SESSION["error"] = "";
        require_once PAGE_PATH . 'sign.php';
    }
}
