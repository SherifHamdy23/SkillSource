<?php

namespace Support;

require_once 'autoload.php';


class Router {
    private static $routes = [
        'GET' => [],
        'POST' => [],
        'PUT' => [],
        'DELETE' => [],
    ];
    public static function get($url, $handler) {
        static::$routes['GET'][$url] = $handler;
    }

    public static function dispatch($url, $verb) {
        if (array_key_exists($url, self::$routes[$verb])) {
            // Route found, execute the handler
            $handler = self::$routes[$verb][$url];
            if (is_callable($handler)) {
                call_user_func($handler);
            } else {
                // Handle controller action
                list($controllerName, $methodName) = $handler;
                $controller = new $controllerName();
                echo $controller->$methodName();
            }
        } else {
            // Route not found, handle 404
            header("HTTP/1.0 404 Not Found");
            echo "404 Not Found";
        }
    }
}

