<?php 
  $albums = Album::all();
?>

<div class="card-deck mt-5">
  <?php 
    foreach($albums as $album) { 
      include '_card.php';
    }
  ?>
</div>