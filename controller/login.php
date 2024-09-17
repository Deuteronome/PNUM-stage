<?php

session_start();
if(isset($_SESSION['userId'])){
    header("location: ../controller/home.php");
}
if(isset($_GET["message"])){
    $message = "Utilisateur ou mot de passe invalide";
}
require_once('../view/loginView.php');