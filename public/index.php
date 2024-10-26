<?php

// echo "Hello World!";

// Basic Routing
// path info is the part of the URL after the domain name or .php file
// $path = "/index"; //default path info
// if (isset($_SERVER["PATH_INFO"])) {
//     $path = $_SERVER["PATH_INFO"];
// }

// require __DIR__ . "//../app/Views/" . $path . ".php";

// Use Routing with Controller
require_once __DIR__ . "/../vendor/autoload.php";

use azkass\learn\php\mvc\App\Router;
use azkass\learn\php\mvc\Controller\HomeController;

Router::add("GET", "/", HomeController::class, "index");
Router::add("GET", "/hello", HomeController::class, "hello");
Router::add("GET", "/world", HomeController::class, "world");

Router::run();
