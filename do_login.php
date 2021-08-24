<?php

if ('post' !== strtolower($_SERVER['REQUEST_METHOD'])) {
    http_response_code(400);
    die('Only post requests please');
}

session_start();

$user = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if (isValidLogin($user, $password)) {
    header('Location: home.php');
    die;
}

http_response_code(403);
die('Incorrect credentials');