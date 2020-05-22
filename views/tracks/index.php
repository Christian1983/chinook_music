<?php 
  $tracks = Track::all();
?>

<div class="card-deck mt-5">
  <?php 
    global $tracks;
    foreach($tracks as $track) { 
      include '_card.php';
    }
  ?>
</div>