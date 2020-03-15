<?php
session_start();

if ($_SESSION['login'] ?? null) {
    header('location: lorem');
    exit();
} elseif (!(isset($_SESSION['username']) && isset($_SESSION['password']))) {
    header('location: registration');
    exit();
} else {
    $usernameLogin = $_POST['username'] ?? null;
    $passwordLogin = $_POST['password'] ?? null;

    if (is_string($usernameLogin) && is_string($passwordLogin)) {
        if ($usernameLogin === $_SESSION['username'] && $passwordLogin === $_SESSION['password']) {
            $_SESSION['login'] = true;
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
