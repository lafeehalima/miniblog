<?php

require "connection.php";

function getAllposts(){
    $db = dbconnect();
    $query = $db->query("SELECT * FROM posts ");
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function register($pseudo,  $password, $email){
    $db = dbconnect();
    $query = $db->exec("INSERT INTO user VALUES(null,'$pseudo','$password', '$email' )");
}

function getUserInfosByMail($email){
    $db = dbconnect();
    $query = $db->query("SELECT * FROM user WHERE user.email = '$email'");
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function getPostById($id_post){
    $db = dbconnect();
    $query = $db->query("SELECT * FROM posts WHERE id=$id_post");
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;

}
function getPostbyuser($id_autor){
    $db = dbconnect();
    $query = $db->query("SELECT * FROM user WHERE id = $id_autor");
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
}
function getAllCategory(){
    $db = dbconnect();
    $query = $db->query("SELECT * FROM category");
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
     return $result;
  
}
function getPostsByCategoryId($categoryId){
    $db = dbconnect();
    $query = $db->query("SELECT * FROM posts WHERE category_id = $categoryId");
   $result = $query->fetchAll(PDO::FETCH_ASSOC);
   return $result;
}



function addPost($title, $content, $autor, $image, $category){
    $db = dbconnect();
    $query = $db->prepare("INSERT INTO  posts VALUES(null, :title, :content, :autor_id, null, :image, :category_id)");
    $query->bindParam(':title', $title);
    $query->bindParam(':autor_id', $autor);
    $query->bindParam(':image', $image);
    $query->bindParam(':content', $content);
    $query->bindParam(':category_id', $category);
    $query->execute();
    
}
function editPost($id, $title, $content, $image, $category){
$db = dbconnect();
$query = $db->prepare("UPDATE posts SET title=:title, content=:content, image=:image, category_id=:category  WHERE id=:id");
$query->bindParam(":id",$id);
$query->bindParam(":title", $title);
$query->bindParam(":image", $image);
$query->bindParam(":content", $content);
$query->bindParam(":category", $category);
$query->execute();
}

function deletePost($id){
    $db = dbconnect();
    $query = $db->exec("DELETE FROM posts WHERE id=$id");
}
function addCom($pseudo,$com,$post_id){
    $db = dbconnect();
    $query = $db->prepare("INSERT INTO com VALUES(:pseudo,:com, :post_id)");
    $query->bindparam('pseudo',$pseudo);
    $query->bindParam(':com', $com);
    $query->bindParam(':post_id', $post_id);
    $query->execute();
}
