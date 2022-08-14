<?php

namespace App\Controllers;

use App\Models\User;
use Symfony\Component\Routing\RouteCollection;

class UserController {

    // get user by username
    public function getUser(string $username, RouteCollection $routes) {
        $user = new User();
        $user->read($username);

        require_once APP_ROOT . '/views/profile.php';
    }

}