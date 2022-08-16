<?php
//site name
define('SITE_NAME', 'IFriend');

//App Root
define('APP_ROOT',dirname(dirname(__FILE__)));
define('URL_ROOT', '/');
// using wamp server : http://localhost/social-media-app-with-php/
define('URL_SUBFOLDER', '/social-media-app-with-php');
define("PAGE_PATH", APP_ROOT . '/app/views/pages/');
define("COMPO_PATH", APP_ROOT . '/app/views/components/');
define("URI_ROOT","http://localhost/social-media-app-with-php/");

//DB Params
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'ifriend');