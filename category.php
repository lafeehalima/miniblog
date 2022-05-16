<?php
require 'model/functions.php';

if(isset($_GET) && !empty($_GET)){
$id = $_GET["id"];
//echo "ceci est la catégorie avec l'id : $id";
$posts = getPostsByCategoryId($id);
}

require 'views/categoryView.php';