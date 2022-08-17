<?php

namespace App\Controllers;

use Symfony\Component\Routing\RouteCollection;
use PDOException;
use App\Utilities;
use App\Models\User;

class UserController
{

    public function sign(RouteCollection $routes)
    {
        session_unset();
        unset($_COOKIE['UID']);

        if( !isset($_POST["username"]) or !isset($_POST["password"]) or !isset($_POST["name"]) or !isset($_POST["age"]) ){
            Utilities::wrongCase("A value is not set", "sign.php");
        }

        if (
            !Utilities::verifyInput($_POST['password']) or
            !Utilities::verifyInput($_POST['username']) or
            !Utilities::verifyInput($_POST['name']) or
            !Utilities::verifyInput($_POST['age'])
        ) {
            Utilities::wrongCase("A value is not set", "sign.php");
        }

        $user = (User::get_instance());

        $result = $user->exist($_POST['username']);

        if ($result) {
            Utilities::wrongCase("username already exist " . $_POST['username'], "sign.php");
        }

        $pw = $_POST['password'];
        // check password security
        // ^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$
        if (!preg_match("^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$^", $pw)) {
            Utilities::wrongCase("Your password is weak : " . $pw, "sign.php");
        }

        $age = (int) $_POST["age"];
        if (!is_integer($age) or $_POST["age"] < 18) {
            Utilities::wrongCase("age must be over 18 " . $age, "sign.php");
        }

        $pw = password_hash($pw, PASSWORD_BCRYPT, ["cost" => 8]);
        $result = $user->create([
            "username" => $_POST["username"],
            "password" => $pw,
            "age" => $age,
            "name" => $_POST["name"]
        ]);

        if ($result instanceof PDOException) {
            var_dump($result->errorInfo);
            return;
        }

        if ($result === true) {
            $_SESSION["current_user"] = $user;
            setcookie("UID", $_POST["username"], time() + 3600 * 24 * 60, "/","", false, true);
            Utilities::getHimTo("home");
        }
    }
    // get user by username
    public function login(RouteCollection $routes)
    {

        // get the user
        // check password
        // set coockies
        // redirect to home

        if (!isset($_POST['username']) or !isset($_POST['password'])) {
            // with error
            Utilities::getHimTo("account/login");
        }

        $user = (User::get_instance());
        $exist = $user->exist($_POST['username']);
        if ($exist === false) {
            Utilities::wrongCase("user not found", "login.php");
        }
        $data = $user->read($_POST['username'], ["username","password", "name", "age", "bio", "picture", "started_at"]);
        var_dump($data);
        if (!password_verify($_POST['password'], $data["password"])) {
            Utilities::wrongCase("password does not match", "login.php");
        }

        $_SESSION["current_user"] = $user;
        setcookie("UID", $data["username"], time() + 3600 * 24 * 60, "/","", false, true);

        Utilities::getHimTo("home");
    }
}
