<?php

namespace App;

use Throwable;

final class Utilities
{
    public static function getHimTo($url)
    {
        header("Location: " . URI_ROOT . $url);
        die();
    }

    public static function runQuery(callable $fnct)
    {
        try {
            $fnct();
        } catch (Throwable $e) {
            var_dump($e);
            // use instanceof to check type of error ex: PDOException 
        }
    }

    public static function wrongCase($msg, $page)
    {
        $_SESSION["error"] = $msg;
        require_once PAGE_PATH . $page;
    }

    public static function verifyInput($input) {
        if( !isset($input) ) return false;
        if( empty($input) ) return false;
        if( $input === "" ) return false;
        if( $input === null ) return false;
        return true;
    }
}
