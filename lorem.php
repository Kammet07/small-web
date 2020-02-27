<?php
session_start();

if (!(isset($_SESSION['username']) && isset($_SESSION['password'])) && !$_SESSION['username'] && $_SESSION['password']) {
    header('location: registration');
} elseif (!isset($_SESSION['login']) || !$_SESSION['login']) {
    header('location: login');
}

echo "Username is: " . $_SESSION['username'];

?>

<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur libero amet perspiciatis quaerat aliquid dolor
    repellendus, qui tenetur, optio et eius vero. Dicta non ipsam perferendis porro dolores vero esse.</p>
<form action="logout.php" method="post">
    <button type="submit">Logout</button>
</form>
