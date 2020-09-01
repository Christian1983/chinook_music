<div class='jumbotron'>
  <div class='row'>
    <div class='col-3'>
      <h1><?php echo $artist->Name ?></h1>
      <img class="" src="https://picsum.photos/400/200" alt="Ein Bild" />
    </div>
    <div class='col-9'> 
      <table class='table table-striped table-hover'>
        <thead>
          <tr>
            <td>Album</td>
            <td>Preis</td>
          </tr>
        </thead>
        <tbody>
          <?php 
            $albs = $artist->albums();
            foreach($albs as $album) { 
              include '_album.php';
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>