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

    public static function post($url, $handler) {
        static::$routes['POST'][$url] = $handler;
    }
    public static function put($url, $handler) {
        static::$routes['PUT'][$url] = $handler;
    }
    public static function delete($url, $handler) {
        static::$routes['DELETE'][$url] = $handler;
    }
    public static function dispatch($url, $verb) {
        $urlParts = explode('/', trim($url, '/'));
    
        if ($route = self::findMatchingRoute($urlParts, $verb)) {
            self::executeHandler($route);
        } else {
            self::handleNotFound();
        }
    }
    
    private static function findMatchingRoute($urlParts, $verb) {
        if (!array_key_exists($verb, self::$routes)) {
            return null;
        }
    
        foreach (self::$routes[$verb] as $route => $handler) {
            if (self::routeMatchesUrl($route, $urlParts)) {
                return [
                    'handler' => $handler,
                    'params' => self::extractParams($route, $urlParts)
                ];
            }
        }
    
        return null;
    }
    
    private static function routeMatchesUrl($route, $urlParts) {
        $routeParts = explode('/', trim($route, '/'));
        if (count($urlParts) !== count($routeParts)) {
            return false;
        }
    
        foreach ($routeParts as $index => $part) {
            if ($part !== $urlParts[$index] && strpos($part, '{') !== 0) {
                return false;
            }
        }
    
        return true;
    }
    
    private static function extractParams($route, $urlParts) {
        $routeParts = explode('/', trim($route, '/'));
        $params = [];
    
        foreach ($routeParts as $index => $part) {
            if (strpos($part, '{') === 0) {
                $paramName = trim($part, '{}');
                $params[$paramName] = $urlParts[$index];
            }
        }
    
        return $params;
    }
    
    private static function executeHandler($route) {
        $handler = $route['handler'];
        $params = $route['params'];
    
        if (is_callable($handler)) {
            call_user_func_array($handler, $params);
        } else {
            list($controllerName, $methodName) = $handler;
            $controller = new $controllerName();
            echo $controller->$methodName($params);
        }
    }
    
    private static function handleNotFound() {
        header("HTTP/1.0 404 Not Found");
        echo "404 Not Found";
    }
    
}


