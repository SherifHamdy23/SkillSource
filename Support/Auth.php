<?php
    namespace Support;

    use Models\User;


    // auth.php
class Auth {
    public static function login($email, $password) {
        $user = User::first(User::where('email', $email));
        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user;
            return true;
        }
        return false;
    }
    public static function user() {
        return auth();
    }
    public static function logout() {
        // Implement logout logic
        unset($_SESSION['user']);
        session_destroy();
    }

    public static function RedirectIfGuest() {
        return isset($_SESSION['user']);
    }

    public static function getCurrentUserId() {
        return isset($_SESSION['user']) ? $_SESSION['user']['id'] : null;
    }

    public static function register($email, $password, $name, $phone, $accountType) {
        User::create([
            ':name' => $name,
            ':email' => $email,
            ':password' => password_hash($password, PASSWORD_DEFAULT),
            ':phone' => $phone,
            ':account_type' => $accountType
        ]);
        return User::exists('email', $email);
    }
}

    