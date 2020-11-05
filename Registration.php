<?php
require_once "UserDataService.php";
session_start();
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$username = $_POST['username'];
$password = $_POST['password'];

$service = new UserDataService();

$_SESSION['Login'] = $service->registerUser($firstName, $lastName, $username, $password);

if($_SESSION['Login']){
    header("Location:LoginSuccess.php");
}else{
    header("Location:LoginFailed.php");
}
