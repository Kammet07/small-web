<?php
session_start();

$newUsername = $_POST['username'] ?? null;
$newPassword = $_POST['password'] ?? null;

if (is_string($newUsername) && is_string($newPassword)) {
    $_SESSION['username'] = $newUsername;
    $_SESSION['password'] = $newPassword;
}

$username = $_SESSION['username'] ?? null;
$password = $_SESSION['password'] ?? null;

if ($username && $password) {
    echo "Welcome";
    header('location: login.php');
}
if ($_SESSION['login']) {
    header('location: lorem.php');
}

?>

<form method="post">
    <label>Your username: <input name="username" value="<?= $username ?>"></label>
    <label>Your password: <input name="password" value="<?= $password ?>"></label>
    <button type="submit">Register</button>
</form>
