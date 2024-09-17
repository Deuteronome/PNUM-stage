<?php
session_start();
require_once('../Model/Model.php');

$bdd = new Model();

$sites = $bdd->getAllSites();

$referents = $bdd->getUsersByRole($bdd->getRoleId("Référent")["id"]);

if(isset($_SESSION['userId'])){
    header("location: ../controller/home.php");
}




require_once('../view/signUpView.php');

