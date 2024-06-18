<?php
namespace Controllers\Auth;

use Support\Auth;

class AuthController
{

    public function login() {
        $email = $_POST['email'];
        $password = $_POST['password'];
        

        if (Auth::login($email, $password) == 1) {
            header("Location: /home");
        } else {
            header("Location: /login?error=invalid_credentials");
        }
    }

    public function logout() {
        Auth::logout();
        header("Location: /login");
    }

    public function register() {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];

        Auth::register($email, $password, $name, $phone, $address);
        header("Location: /login");
    }
}

?>
