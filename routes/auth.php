<?php
    require_once('../Support/autoload.php');

    use Support\Router;
    use Controllers\AuthController;
    Router::get('/login', function () {
        view('login');
    });
    Router::post('/login', [AuthController::class, 'login']);

    Router::get('/logout', [AuthController::class, 'logout']);
