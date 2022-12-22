<?php
include('config/constants.php');
session_start(); //start session
session_destroy(); // distroy all the current sessions
$url = 'registration/login.php';
header('Location: ' . $url); // redireted to login page

?>