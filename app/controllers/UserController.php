<?php

namespace App\Controllers;

use App\Utilities;
use App\Models\User;
use Symfony\Component\Routing\RouteCollection;

class UserController {

    // get user by username
    public function login(RouteCollection $routes) {
        
        // get the user
        // check password
        // set coockies
        // redirect to home
        
        if( !isset($_POST['username']) or !isset($_POST['password']) ) {
            // with error
            Utilities::getHimTo("account/login");
        }

        $user = new User();
        $data = $user->read($_POST['username'], ["password","name","bio","picture"]);
        if( $data === false ) {
            // with error
            $_SESSION["error"] = "user not found";
            Utilities::getHimTo("account/login");
        }
        var_dump($data);
        if( !password_verify($_POST['password'], $data["password"]) ){
            // with error
            $_SESSION["error"] = "password does not match";
            $_SESSION["data"] = $data;
            Utilities::getHimTo("account/login");
        }
        
        $user->set([
            "username" => $data["username"],
            "name" => $data["name"],
            "bio" => $data["bio"],
            "age" => $data["age"],
            "picture" => $data["picture"],
            "started_at" => $data["started_at"]
        ]);

        $_SESSION["current_user"] = $user;
        setcookie("UID", $data["username"], time() + 3600*24*60);

        Utilities::getHimTo("/home");
    }

}