<?php
session_start();

var_dump($_SESSION);


if (!$_SESSION['username'] && $_SESSION['password']) {
    header('location: registration.php');
} elseif (!$_SESSION['login']) {
    header('location: login.php');
}

echo "Username is: " . $_SESSION['username'];

?>

<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur libero amet perspiciatis quaerat aliquid dolor
    repellendus, qui tenetur, optio et eius vero. Dicta non ipsam perferendis porro dolores vero esse.</p>
<form action="logout.php" method="post">
    <button type="submit">Logout</button>
</form>
