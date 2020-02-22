<?php
session_start();
$_SESSION['login'] = false;
echo session_status();
if ($_SESSION['login']) {
    header('location: lorem.php');
    echo "1";
} else {
    echo "4";



    $newUsername = $_POST['username'] ?? null;
    $newPassword = $_POST['password'] ?? null;

    if (is_string($newUsername) & is_string($newPassword)) {
        $_SESSION['username'] = $newUsername;
        $_SESSION['password'] = $newPassword;
    }

    $username = $_SESSION['username'] ?? null;
    $password = $_SESSION['password'] ?? null;

    if ($username & $password) {
        echo "hello";
        $_SESSION['login'] = true;
    }
    if ($_SESSION['login']) {
        header('location: lorem.php');
    }

//    echo $_SESSION['username'];
//    echo $_SESSION['password'];
    echo $_SESSION['login'];
}

?>
<form method="post">
    <label>Your username: <input name="username" value="<?= $username ?>"></label>
    <label>Your password: <input name="password" value="<?= $password ?>"></label>
    <button type="submit">Register</button>
</form>
