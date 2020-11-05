<?php
require_once "UserDataService.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
$service = new UserDataService();
$username = $_POST['username'];
$password = $_POST['password'];
$_SESSION['Login'] = $service->getUser($username, $password);

if($_SESSION['Login']){
    header("Location:LoginSuccess.php");
}else{
    header("Location:LoginFailed.php");
}


