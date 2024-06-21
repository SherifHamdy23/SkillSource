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

    function sanitize_input($input) {
        // Remove whitespace from the beginning and end
        $input = trim($input);
        // Remove any HTML tags and encode special characters
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        return $input;
    }

    function validate_email($email) {
        $sanitized_email = sanitize_input($email); // Sanitize input
        $email = filter_var($sanitized_email, FILTER_SANITIZE_EMAIL); // Sanitize email
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    function auth() {
        if (isset($_SESSION['user']))
            return new ArrayObject($_SESSION['user'], ArrayObject::ARRAY_AS_PROPS);
    }

    function passwordConfirmation($password, $password_confirmation) {
        return $password === $password_confirmation;
    }