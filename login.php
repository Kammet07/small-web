<?php
session_start();

echo $_SESSION['username'];
echo $_SESSION['password'];
echo $_SESSION['login'];

if (!($_SESSION['username'] & $_SESSION['password'])) {
    header('location: registration.php');
} else {
    $usernameLogin = null;
    $passwordLogin = null;

    if ($usernameLogin === $_SESSION['username'] & $passwordLogin === $_SESSION['password']) {
        $_SESSION['login'] = true;
        header('location: lorem.php');
    }
}

?>

<form method="post">
    <label>Username: <input name="username" value="<?= $usernameLogin ?>"></label>
    <label>Password: <input name="password" value="<?= $passwordLogin ?>"></label>
    <button type="submit">Login</button>
</form>
