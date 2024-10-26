<?php

namespace azkass\learn\php\mvc\App;
class Router
{
    private static array $routes = [];

    // menambahkan URL mapping
    public static function add(
        string $method,
        string $path,
        string $controller,
        string $function
    ): void {
        self::$routes[] = [
            "method" => $method,
            "path" => $path,
            "controller" => $controller,
            "function" => $function,
        ];
    }

    // memilih controller dan function yang sesuai dengan path info dan method request
    public static function run(): void
    {
        // untuk menyimpan path info yang direquest user dan jenis methodnya request
        $path = "/";
        if (isset($_SERVER["PATH_INFO"])) {
            $path = $_SERVER["PATH_INFO"];
        }
        $method = $_SERVER["REQUEST_METHOD"];

        // mencari route yang sesuai dengan path info dan method request
        foreach (self::$routes as $route) {
            if ($route["path"] == $path && $route["method"] == $method) {
                echo "Controller : " .
                    $route["controller"] .
                    ", Function : " .
                    $route["function"];
                return;
            }
        }

        http_response_code(404);
        echo "CONTROLLER NOT FOUND";
    }
}
