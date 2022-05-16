<?php include 'head.php'; ?>

<div class="container mt-5">
  <div class="row">  
 <?php foreach($posts as $post){?>
<h2><a href="single.php?id=<?php echo $post["id"]?>"><?php echo $post["title"]?><H2>


 <?php }
 include 'footer.php';