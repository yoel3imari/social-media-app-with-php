<?php

namespace App;

final class Utilities {
    public static function getHimTo($url) {
        header("Location: " . URI_ROOT . $url);
        die();
    }
}