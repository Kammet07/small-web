<?php
session_start();

if (!isset($_SESSION['login']) || !$_SESSION['login']) {
    header('location: login');
    exit();
}

echo "Username is: " . $_SESSION['username'];

?>

<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur libero amet perspiciatis quaerat aliquid dolor
    repellendus, qui tenetur, optio et eius vero. Dicta non ipsam perferendis porro dolores vero esse.</p>
<form action="logout.php" method="post">
    <button type="submit">Logout</button>
</form>
