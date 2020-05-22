<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark ">
  <a class="navbar-brand" href="/">ChinookMusic</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $router->tracks_path() ?>">Tracks</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/albums">Alben</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="/artists">Künstler</a>
      </li>        
  </div>
</nav>