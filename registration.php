<?php
require __DIR__ . '/UserManager.php';

session_start();

if ($_SESSION['login'] ?? null) {
    header('location: lorem');
    exit();
} else {
    $newUsername = $_POST['username'] ?? null;
    $newPassword = $_POST['password'] ?? null;

    if (is_string($newUsername) && is_string($newPassword)) {
        $user = new UserManager();
        $user->addUser($newUsername, $newPassword);
        header('location: login');
        exit();
    }
}

require __DIR__ . '/registration.phtml';
