<?php
session_start();

if (isset($_SESSION['login']) && $_SESSION['login']) {
    header('location: lorem');
} elseif (!(isset($_SESSION['username']) && isset($_SESSION['password']))) {
    $newUsername = $_POST['username'] ?? null;
    $newPassword = $_POST['password'] ?? null;

    if (is_string($newUsername) && is_string($newPassword)) {
        $_SESSION['username'] = $newUsername;
        $_SESSION['password'] = $newPassword;
    }

    $username = $_SESSION['username'] ?? null;
    $password = $_SESSION['password'] ?? null;
}
if ((isset($_SESSION['username']) && isset($_SESSION['password'])) && ($_SESSION['username'] && $_SESSION['password'])){
    header('location: login');
}
$username = null;
$password = null;

?>

<form method="post">
    <label>Your username: <input name="username" value="<?= $username ?>"></label>
    <label>Your password: <input name="password" value="<?= $password ?>"></label>
    <button type="submit">Register</button>
</form>
