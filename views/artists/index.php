<?php 
  $artists = Artist::all();
?>

<div class="artist-container">
  <?php 
    foreach($artists as $artist) { 
      include '_artist.php';
    }
  ?>
</div>