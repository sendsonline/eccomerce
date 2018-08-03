<?php
session_start();
if(!isset($_SESSION['id'])){
    header('location:../index.php');
}
define('URL', '/eccomerce/');
    session_start();
    $_SESSION['id'] = '';
    $_SESSION['email'] = '';
    $_SESSION['admin'] = '';
    session_destroy();
    header('location: '.URL);