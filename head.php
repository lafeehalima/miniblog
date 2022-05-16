<?php require "functions.php";
session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/1900ccc0d8.js" crossorigin="anonymous"></script>
  
</head>

<body>
<div class="p-5 mb-2 bg-primary text-white"></div>
<?php $categories = getAllCategory(); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Mon ptit blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
        </li>
		<?php 
        if(isset($_SESSION['user'])&&!empty($_SESSION['user'])){?>
		<li class="nav-item">
        	<a href="logout.php" class="nav-link">Déconnexion</a>
        </li>
		<li class="nav-item">
			<a href="addPost.php" class="nav-link">Ajouter un article</a>
		</li>
        <?php }else{ ?>
		<li class="nav-item">
          <a href="signin.php" class="nav-link">Se connecter</a>
        </li>
		<?php }    ?>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="category.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
			catégorie</a>
			<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
			<?php foreach($categories as $category){?>
				<li>
					<a class="dropdown-item" href="category.php?id=<?php echo $category["id"]?>"><?php echo $category["name"]?></a>
				</li>
			<?php } ?>
			</ul>
		</li>
		
         
		</ul>
     
    </div>
  </div>
</nav>


           