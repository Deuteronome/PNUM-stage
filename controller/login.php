<?php
//si l'utilisateur est deja co, il est redirigé vers la page d'accueil qui correspond à son rôle
//dans une adresse si il y a un ? c'est un get
//gérer la variable get si il y a redirection depuis checklogin
session_start();
if(isset($_SESSION['userId'])){
    header("location: ../controller/home.php");
}
if(isset($badUser)){
    echo("Adresse mail ou mot de passe invalide");
}
require_once('../view/loginView.php');