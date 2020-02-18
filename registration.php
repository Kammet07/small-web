<?php

echo session_status();
if ($_SESSION['login']) {
    header('location: lorem.php');
    echo "1";
} elseif ($_SESSION['username'] & $_SESSION['password']) {
    echo "3";

    $newUsername = $_POST['username'] ?? null;
    $newPassword = $_POST['password'] ?? null;

    if (is_string($newUsername) & is_string($newPassword)) {
        $_SESSION['username'] = $newUsername;
        $_SESSION['password'] = $newPassword;
    }

    $username = $_SESSION['username'] ?? null;
    $password = $_SESSION['password'] ?? null;

} else {
    echo "4";
    session_start();

    $_SESSION['login'] = false;

    $newUsername = $_POST['username'] ?? null;
    $newPassword = $_POST['password'] ?? null;

    if (is_string($newUsername) & is_string($newPassword)) {
        $_SESSION['username'] = $newUsername;
        $_SESSION['password'] = $newPassword;
    }

    $username = $_SESSION['username'] ?? null;
    $password = $_SESSION['password'] ?? null;

    if ($username & $password) {
        $_SESSION['login'] = true;
    }

}

?>
<form method="post">
    <label>Your username: <input name="username" value="<?= $username ?>"></label>
    <label>Your password: <input name="password" value="<?= $password ?>"></label>
    <button type="submit">Register</button>
</form>
