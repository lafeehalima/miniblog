<?php
require 'model/functions.php';
if(isset($_GET['id'])&&!empty($_GET['id'])){
    $id = $_GET['id'];
    $post = getPostById($id);
    $categories = getAllCategory();
    if(isset($_SESSION['user'])&&!empty($_SESSION['user'])&&$_SESSION['user']['id'] === $post['autor_id']){
        if(isset($_POST)&&!empty($_POST)){
            $userId = $_SESSION['user']['id'];
            $title = $_POST['title'];
            $content = $_POST['content'];
            $category = $_POST['category_id'];
            if(isset($_FILES)&&!empty($_FILES)){
                $image = $_FILES['image'];
                $upload_dir = 'uploads';
                $from = $image['tmp_name'];
                $lastDot = strrpos($image['name'], '.');
                $name = uniqid();
                $ext = substr($image['name'], $lastDot);
                $to = $upload_dir.$name.$ext;
                move_uploaded_file($from,$to);
            }else{
                $to = $post['image'];
            }
            editPost($id, $title,  $content, $to, $category);
            header('location:single.php?id='.$id.'&status=success&message=Votre article a bien été mis à jour');
        }
        require 'views/editPostView.php';
    }else{
        echo"Vous devez être connécté pour ajouter un article";
    } 
}

