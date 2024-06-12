<?php
    
    require_once __DIR__.'/../Support/autoload.php';
    require_once __DIR__.'./auth.php';

    use Support\Router;
    use Controllers\AboutController;
    use Controllers\AuthController;
    use Controllers\UsersController;
    use Controllers\JobsController;

    // Example usage
    // Define routes
    Router::get('/', function() {
        echo "Hello, world!";
    });
    Router::get('/users', [UsersController::class, 'index']);

    Router::get('/about', [AboutController::class, 'index']);
    Router::get('/home', fn () => view('home'));

    Router::get('/test', function () {
        echo "Hello Gentle men";
    });
    // Dispatch the request
    Router::get('/job/create', [JobsController::class, 'create']);
    Router::post('/job/store', [JobsController::class, 'store']);

    $requestUrl = $_SERVER['REQUEST_URI'];
    // echo $_SERVER['REQUEST_METHOD']."<br>";
    Router::dispatch($requestUrl, $_SERVER['REQUEST_METHOD']);