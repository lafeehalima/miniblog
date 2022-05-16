<?php includ 'head.php';
if(isset($_POST["form"]) &&!empty($_POST["form"])){
echo password_hash("rasmuslerdorf");  
}
?>


<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Connexion</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form action="" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="pseudo" class="form-control" placeholder="Nom d'utilisateur">
						
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="email" name="email" class="form-control" placeholder="Email">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="password"class="form-control" placeholder="Mot de passe">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Se souvenir de moi
					</div>
					<div class="form-group">
						<input type="submit" value="Inscription" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Déja inscrit?<a href="signin.php">Connexion</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Mot de passe oublié?</a>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include 'footer.php' ?> ;