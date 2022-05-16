<?php

require "model/functions.php"; 

if(isset($_GET["id"])&&!empty($_GET["id"])){
    $id = $_GET["id"];
    deletePost($id);
    header("location:index.php?status=success&mesage=l'article a bien été suprimé");
}