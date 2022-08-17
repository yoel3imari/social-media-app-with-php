<?php

namespace App\Traits;

trait Singleton
{
    private static $instance = [];

    public static function get_instance()
    {
        // get the name of the calss from where we call singleton
        $called_class = get_called_class();

        if (!isset(self::$instance[$called_class])) {
            self::$instance[$called_class] = new $called_class;
        }

        return self::$instance[$called_class];
    }
}
