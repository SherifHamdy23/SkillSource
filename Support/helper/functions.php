<?php

    function redirect() {
        header('Location: test');
    }

    function isLoggedIn() {
        session_start();
        if (!isset($_SESSION['user'])) header('Location: /login');
        return true;
    }
    function view($view, $data = []) {
        // echo $view;
        // print_r($data);
        extract($data); // Extract data array into variables
        include_once(__DIR__."/../../views/{$view}.php"); // Include the view file
    }