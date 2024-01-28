<?php
session_start();

if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [];
}

$_SESSION['users']['admin'] = 'admin';
$_SESSION['users']['22-10195'] = 'password';
