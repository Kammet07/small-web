<?php
require __DIR__ . '/UserManager.php';

session_start();

if ($_SESSION['login'] ?? null) {
    header('location: lorem');
    exit();
} else {
    $usernameLogin = $_POST['username'] ?? null;
    $passwordLogin = $_POST['password'] ?? null;

    $user = new UserManager();

    if (is_string($usernameLogin) && is_string($passwordLogin)) {
        if ($user->verify($usernameLogin, $passwordLogin)) {
            $_SESSION['login'] = true;
            $_SESSION['username'] = $usernameLogin;
            header('location: lorem');
            exit();
        }
    }
}

require __DIR__ . '/login.phtml';
