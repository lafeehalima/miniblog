<?php include 'head.php'; ?>

<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
    
        <div>
            <label for="title">Titre de l'article</label>
            <input id="title" type="text" name="title" class="form-control" value="<?php echo $post['title'] ?>">
        </div>

        <div>
            <label for="category">Catégorie article</label>
            <select id="category" type="text" name="category_id" class="form-control">
                <?php foreach($categories as $category){ 
                    if($category['id'] == $post['category_id']) { ?>
                        <option value="<?php echo $category['id']?>" selected><?php echo $category['name']; ?></option>
                    <?php } else { ?>
                        <option value="<?php echo $category['id']?>"><?php echo $category['name']; ?></option>
                    <?php } 
                } ?>
            </select>
        </div>
        <div>
            <label for="image">Image à la une</label>
            <input id="image" name="image" type="file" class="form-control">
        </div>
        <div>
            <label for="content">Contenu de l'article</label>
            <textarea class="form-control" name="content" id="content" cols="30" rows="10"><?php echo $post['content'] ?></textarea>
        </div>
        <input type="submit" value="Envoyer le formulaire">
    </form>
</div>

<?php include 'footer.php'; ?>