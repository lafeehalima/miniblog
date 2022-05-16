<?php
//include 'head.php'; 
require 'model/functions.php';

if(isset($_POST) && !empty($_POST)){
    $pseudo = $_POST['pseudo'];
    $com= $_POST['com'];
    $articleId = $_POST['article'];
    addCom($pseudo, $com, $articleId);
    header("location:index.php?status=success&message=Votre commentaire a bien été enregistré");
} ?>
