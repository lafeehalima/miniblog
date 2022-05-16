<?php
require 'model/functions.php';

if(isset($_GET['id']) &&!empty($_GET['id'])){
 $id = $_GET['id'];
 $article = getPostById($id);
 $autor = getPostbyuser($article['autor_id']);
 $coms = getPostCommentsByPostId($id);

 //var_dump($autor);

}else{
    header("location: single.php?id=2");
} 
require "views/singleView.php";


