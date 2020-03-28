<?php
require __DIR__ . '/User.php';

session_start();

if ($_SESSION['login'] ?? null) {
    header('location: lorem');
    exit();
} else {
    $usernameLogin = $_POST['username'] ?? null;
    $passwordLogin = $_POST['password'] ?? null;

    $user = new User();

    if (is_string($usernameLogin) && is_string($passwordLogin)) {
        if ($user->verificateUser($usernameLogin, $passwordLogin)) {
            $_SESSION['login'] = true;
            $_SESSION['username'] = $usernameLogin;
            header('location: lorem');
            exit();
        }
    }
}

?>

<form method="post">
    <label>Username: <input name="username"></label>
    <label>Password: <input name="password"></label>
    <button type="submit">Login</button>
</form>
