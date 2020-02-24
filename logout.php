<?php
session_start();

if (!$_SESSION['login']) {
    header('location: login.php');
} else {
    header('location: registration.php');
    session_destroy();
}
