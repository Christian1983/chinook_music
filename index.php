<!doctype html>
<html lang="de">
<?php 
    include 'routes.php';

    function getView($request) {
        global $routes;

        $route_path = $routes[$request];
        if(empty($route_path))
            return 'static/404.html';
        else
            $view = $route_path['file'] . '.php';
            return $view;
    }
?>
<head>
  <meta charset="utf-8">
  <title>Chinook Musik</title>
  <meta name="description" content="Student Groups">
  <meta name="author" content="Christian Neumann">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css?v=1.0">
</head>

<body>
  <script src="js/scripts.js"></script>
  <header id='mainHeader'>
    <?php include 'layout/navigation.php'?>
  </header>
  <div id="mainContent">
      <div class='px-5'>
        <?php // get current view
            $view = getView($_SERVER['REQUEST_URI']);
            if ( $view != false )
                include $view;
        ?>
      </div>
  </div>
</body>
</html>

