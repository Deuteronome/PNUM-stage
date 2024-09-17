
<?php
    session_start();
    include_once('../Model/Model.php');
    $identifier = htmlspecialchars($_POST['identifiant']);
    $password = htmlspecialchars($_POST['password']);
    $loginMessage = "";
    $bdd = new Model();
    $user = $bdd->findUserByIdentifier($identifier);
    if($user && password_verify($password, $user['password']) ){
        $_SESSION['userId']=$user['id'];
        $_SESSION['identifier']=$user['firstname']." ".$user['lastname'];
        header("location: ../controller/home.php");
    }
    else{
        $loginMessage = "ERREUR";
        header("location: ../controller/login.php?message=$loginMessage");
    }
    var_dump($user);

