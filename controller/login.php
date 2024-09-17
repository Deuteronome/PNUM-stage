<?php

session_start();
if(isset($_SESSION['userId'])){
    header("location: ../controller/home.php");
}
if(isset($badUser)){
    echo("Adresse mail ou mot de passe invalide");
}
require_once('../view/loginView.php');