<?php
session_start();

var_dump($_SESSION);

if ($_SESSION['login']) {
    header('location: lorem.php');
} elseif (!($_SESSION['username'] && $_SESSION['password'])) {
    header('location: registration.php');
} else {
    $usernameLogin = $_POST['username'] ?? null;
    $passwordLogin = $_POST['password'] ?? null;

    if (is_string($usernameLogin) && is_string($passwordLogin)) {
        if ($usernameLogin === $_SESSION['username'] && $passwordLogin === $_SESSION['password']) {
            $_SESSION['login'] = true;
            header('location: lorem.php');
        }
    }

    $username = null;
    $password = null;
}

?>

<form method="post">
    <label>Username: <input name="username" value="<?= $username ?>"></label>
    <label>Password: <input name="password" value="<?= $password ?>"></label>
    <button type="submit">Login</button>
</form>
