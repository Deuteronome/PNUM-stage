<?php

    session_start();
    include_once('../Model/Model.php');
    $bdd = new Model();
    $errorMessage = "";

    $firstName = htmlspecialchars($_POST['firstname']);
    $lastName = htmlspecialchars($_POST['lastname']);
    $dateOfBirth = (new DateTime($_POST['date_of_birth']))->format('Y-m-d H:i:s');
    $referent = $_POST['referents'];
    $site = $_POST['site'];
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT);

    if(!$bdd->findUserByIdentifier($email)){
    $bdd->createStagiaire($firstName, $lastName, $dateOfBirth, $referent, $site, $email, $password);
    }else {
        $errorMessage = "email déjà utilisé";
        header("location: ../controller/signUp.php?message=$errorMessage");
    }   