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

//DB Params
define('DB_HOST', 'your-host');
define('DB_USER', 'your-username');
define('DB_PASS', 'your-password');
define('DB_NAME', 'your-db-name');