<?php
namespace Controllers;

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
}

?>
