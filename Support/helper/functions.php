<?php
    session_start();

    function redirect() {
        header('Location: test');
    }

    function isLoggedIn() {
        if (!isset($_SESSION['user'])) header('Location: /login');
        return true;
    }
    function isGuest() {
        if (isset($_SESSION['user'])) header('Location: /home');
    }

    function isRecuiter() {
        isLoggedIn();
        if ($_SESSION['user']['account_type'] != 'recuiter') header('Location: /home');
        return true;
    }

    function isJobSeeker() {
        isLoggedIn();
        if ($_SESSION['user']['account_type'] != 'job_seeker') header('Location: /home');
        return true;
    }

    function view($view, $data = []) {
        // echo $view;
        // print_r($data);
        extract($data); // Extract data array into variables
        include_once(__DIR__."/../../views/{$view}.php"); // Include the view file
    }

    function json($data) {
        return json_encode($data);
    }
