
<?php
    session_start();
    include_once('../Model/Model.php');
    $identifier = htmlspecialchars($_POST['identifiant']);
    $password = htmlspecialchars($_POST['password']);
    $loginMessage = "";
    $bdd = new Model();
    $user = $bdd->findUserByIdentifier($identifier);
    if(!$user){
        $loginMessage = "not found";
        header("location: ../controller/login.php?message=$loginMessage");
    }
    else if($password === $user['password']){
        $_SESSION['userId']=$user['id'];
        $_SESSION['identifier']=$user['firstname']." ".$user['lastname'];
        header("location: ../controller/home.php");
    }
    else{
        $loginMessage = 'mot de passe incorrect';
        header("location: ../controller/login.php");
    }
    var_dump($user);

