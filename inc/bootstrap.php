<?php
require __DIR__ . "/../vendor/autoload.php";
require __DIR__ . "/functions.php";

try {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
    $dotenv->load();
//    $dotenv->required(["SQL_HOST", "SQL_USER", "SQL_PASS"]);
} catch (Exception $e) {
    echo "Missing required environment variables.";
}
