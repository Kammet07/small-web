<?php
require __DIR__ . '/User.php';

session_start();

if ($_SESSION['login'] ?? null) {
    header('location: lorem');
    exit();
} elseif (!(isset($_SESSION['username']) && isset($_SESSION['password']))) {
    $newUsername = $_POST['username'] ?? null;
    $newPassword = $_POST['password'] ?? null;

    if (is_string($newUsername) && is_string($newPassword)) {
        $_SESSION['username'] = $newUsername;
        $_SESSION['password'] = $newPassword;

        $user = new User();
        $user->addUser($newUsername, $newPassword);
    }

    $username = $_SESSION['username'] ?? null;
    $password = $_SESSION['password'] ?? null;
}
if ((isset($_SESSION['username']) && isset($_SESSION['password'])) && ($_SESSION['username'] && $_SESSION['password'])){
    header('location: login');
    exit();
}

?>

<form method="post">
    <label>Your username: <input name="username"></label>
    <label>Your password: <input name="password"></label>
    <button type="submit">Register</button>
</form>
