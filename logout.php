<?php
session_start();

if (!isset($_SESSION['login']) || !$_SESSION['login']) {
    header('location: login');
} else {
    session_destroy();
    header('location: registration');
}
