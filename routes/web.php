<?php
    
    require_once __DIR__.'/../Support/autoload.php';

    use Support\Router;
    use Controllers\AboutController;
use Controllers\AuthController;
use Controllers\UsersController;

    // Example usage
    // Define routes
    Router::get('/', function() {
        echo "Hello, world!";
    });
    Router::get('/users', [UsersController::class, 'index']);
    Router::get('/login', function () {
        view('login');
    });
    Router::post('/login', [AuthController::class, 'login']);
    Router::get('/about', [AboutController::class, 'index']);
    Router::get('/home', fn () => view('home'));
    Router::get('/logout', [AuthController::class, 'logout']);
    Router::get('/test', function () {
        echo "Hello Gentle men";
    });
    // Dispatch the request
    $requestUrl = $_SERVER['REQUEST_URI'];
    // echo $_SERVER['REQUEST_METHOD']."<br>";
    Router::dispatch($requestUrl, $_SERVER['REQUEST_METHOD']);