<?php
    
    require_once __DIR__.'/../Support/autoload.php';
    require_once __DIR__.'./auth.php';

    use Support\Router;

    use Controllers\UsersController;
    use Controllers\JobsController;

    // Example usage
    // Define routes
    Router::get('/', fn () => view('home'));
    Router::get('/users', [UsersController::class, 'index']);

    Router::get('/home', fn () => view('home'));

    Router::get('/status',
    fn () => view('200')
);

    Router::get('/job/apply', [JobsController::class, 'index']);
    Router::post('/job/apply', [JobsController::class, 'index']);
    Router::get('/job/create', [JobsController::class, 'create']);
    Router::post('/job/store', [JobsController::class, 'store']);
    Router::get('/job/{id}', [JobsController::class, 'show']);


    Router::get('/job/{id}/candidates', [JobsController::class, 'candidates']);

    $requestUrl = $_SERVER['REQUEST_URI'];
    // echo $_SERVER['REQUEST_METHOD']."<br>";
    Router::dispatch($requestUrl, $_SERVER['REQUEST_METHOD']);