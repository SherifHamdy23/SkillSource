<?php
    
    require_once __DIR__.'/../Support/autoload.php';
    require_once __DIR__.'/auth.php';

use Controllers\CommentsController;
use Support\Router;

    use Controllers\UsersController;
    use Controllers\JobsController;
    use Support\Request;

    // Example usage
    // Define routes
    Router::get('/', fn () => view('home'));
    Router::get('/users', [UsersController::class, 'index']);

    Router::get('/home', fn () => view('home'));

    Router::get('/status',
    fn () => view('200')
);

    Router::get('/job/create', [JobsController::class, 'create']);
    Router::post('/job/store', [JobsController::class, 'store']);
    Router::get('/job/{id}/apply', [JobsController::class, 'apply']);
    Router::get('/job/{id}', [JobsController::class, 'show']);
    Router::get('/job/{id}/edit', fn() => view('jobs/edit'));

    Router::post('/job/{id}/comment', [CommentsController::class, 'store']);


    Router::get('/job/{id}/candidates', [JobsController::class, 'candidates']);
    Router::get('/jobs/manage', fn() => view('job/manage-jobs'));
    $request = Request::getInstance($_REQUEST);
    $requestUrl = $_SERVER['REQUEST_URI'];
    $requestUrl = explode('?', $requestUrl)[0];
    Router::dispatch($requestUrl, $_SERVER['REQUEST_METHOD']);
    