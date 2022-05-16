<?php
require "model/functions.php";
//require "functions.php";
if(isset($_POST)&& !empty($_POST)){
    // var_dump($_post);
    $email = htmlspecialchars($_POST["email"]);
    $entering_password = htmlspecialchars($_POST["password"]);
    //etape 1 : récuperer les donnéés de l'utilisateur
    $userInfos = getUserInfosByMail($email);
    //etape 2 comparer le mot de pass saissie avec celui de la base, probléme celui ci est chiffré => password_verify
    $hashed_password = $userInfos["password"];
    //var_dump($userInfos);
    $isConfirmed = password_verify($entering_password, $hashed_password);
    if($isConfirmed){
        $_SESSION['user'] = $userInfos;
        header('location:index.php');
    }
}

require 'views/signinView.php';

