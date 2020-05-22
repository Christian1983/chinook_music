<?php

  $routes = Array();
  $routes['/'] = array('file' => 'views/root');
  $routes['/groups'] = array('file' => 'views/groups/index');
  $routes['/albums'] = array('file' => 'views/albums/index');
  $routes['/tracks'] = array('file' => 'views/tracks/index');
  $routes['/track'] = array('file' => 'views/tracks/show');
  $routes['/group'] = array('file' => 'views/groups/show');