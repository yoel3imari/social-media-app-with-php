<?php

namespace App\Database;

use PDO;
use PDOException;
use App\Traits\Singleton;

class Db
{
    use Singleton;
    //public static $cnn = null;
    public function __construct()
    {
    }

    public function connect()
    {
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=UTF8;";
        try {
            $cnn = new PDO($dsn, DB_USER, DB_PASS, [PDO::ATTR_PERSISTENT => true]);
            $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $cnn;
        } catch (PDOException $e) {
            echo "Connection to DB failed: " . $e->getMessage();
        }

    }
}
