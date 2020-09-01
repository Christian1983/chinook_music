<!doctype html>
<html lang="de">
<?php 
    define('MODEL_DIR', 'models/');
    set_include_path(get_include_path().PATH_SEPARATOR.MODEL_DIR);
    spl_autoload_extensions('.php');
    spl_autoload_register();
    
    require 'db/connector.php';
    require 'router.php';
    $router = new Router();
?>

<head>
  <meta charset="utf-8">
  <title>Chinook Musik</title>
  <meta name="description" content="Student Groups">
  <meta name="author" content="Christian Neumann">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <header id='mainHeader' style="margin-bottom: 100px">
    <?php include 'layout/navigation.php'?>
  </header>
  <div id="mainContent" class="py-5">
      <div class='px-5'>
        <?php 
          include $router->view(); 
        ?>
      </div>
  </div>
</body>
</html>

