<?php
require __DIR__ . "/../vendor/autoload.php";


require __DIR__ . '/config/dotenv.php';
require __DIR__ . "/functions.php";
require __DIR__ . "/config/helpers.php";
$session = new \Symfony\Component\HttpFoundation\Session\Session();
$session->start();

    error_reporting(E_ALL);
    ini_set("display_errors", '1');
    ini_set("html_errors", '1');

require __DIR__ . "/config/connection.php";
spl_autoload_register(function($class) {
    include __DIR__ ."/classes/" . $class . ".php";
});
