<?php
require 'model/functions.php';
$categories = getAllCategory();
//var_dump($categories);

if(isset($_SESSION["user"])&&!empty($_SESSION["user"])){ 
    //var_dump($_SESSION["user"]);
    if(isset($_POST)&&!empty($_POST)){
    //var_dump($_POST);
    //var_dump($_FILES);
       $userId = $_SESSION["user"]["id"];
       $title = $_POST["title"];
       $image = $_FILES["image"];
       $content = $_POST["content"];
       $categoryId = $_POST["category_id"];
       //var_dump($image);
       $upload_dir = "uploads";
       $from = $image["tmp_name"];
       $lastDot = strrpos($image["name"], '.');
       $name = uniqid();
       $ext = substr($image["name"], $lastDot);
       $to  = './'.$name.$ext;
       //move_uploaded_file($from, $upload_dir, $name.$ext);
       addPost($title, $content,  $userId, $to, $categoryId);
       //var_dump($title, $userId, $content, $to, $categoryId);
       header("location:index.php?status=success&message=Votre article a bien été enregistré");  
    }
    require 'views/addPostView.php';
}else{
    echo"Vous devez être connécté pour ajouter un article";
}