<?php include 'head.php' ?>

<div class="banner">
    <img class="img-fluid" src="<?php echo $article['image']; ?>" alt="<?php echo $article['title']; ?>">
</div>
<div class="container">
    <div class="up">
        <h1 class="text-center"><?php echo $article['title']; ?></h1>
        <?php if($_SESSION['user']['id']=== $autor['id']){?>
        <a class="btn btn-primary" href="editPost.php?id=<?php echo $id ?>">Editer</a>
        <a class="btn btn-danger" href="delete.php?id=<?php echo $id ?>">Effacer</a>
        <?php } ?>
        <h3><?php echo $autor['pseudo']; ?></h3>
            <div>
                <?php echo $article['content']; ?>
            </div>
    </div>

    <div id="coms_list" class="list-group mt-3">
        <div>
            <span class="titre_com">Commentaires</span>
            <span id="badge" class="badge bg-secondary"><?php echo count($coms) ?></span>
        </div>
        <div id="coms">  
            <div class="container">
                <form action="traitement.php" method='post'>
                    <label for="com">Commentaire</label>
                    <textarea name="com" class="form-control" placeholder="Laissez un commentaire !" id="com" style="height: 100px"></textarea>
                    <input type="hidden" value="<?php echo $autor['pseudo'] ?>" name="pseudo">
                    <input type="hidden" value="<?php echo $id['id'] ?>" name= "id">
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
<?php include "footer.php" ;?>