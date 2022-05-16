<?php include 'head.php'; ?>

<div class="container mb-5">
    <h1 class="text-center mb-5"> Nom de la catégorie</h1>
    <div class="row">
        <?php foreach($posts as $post){ ?>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <img src="<?php echo $post['image']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $post["title"]; ?></h5>
                    <a href="single.php?id=<?php echo $post['id']; ?>" class="btn btn-primary">Cliquez pour voir le post</a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
    
<?php include 'footer.php'; ?>