<?php
session_start();

if (!$_SESSION['login']) {
    header('location: login');
} else {
    header('location: registration');
    session_destroy();
}
