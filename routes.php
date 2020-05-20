<?php

  $routes = Array();
  $routes['/'] = array('file' => 'views/root');
  $routes['/groups'] = array('file' => 'views/groups/index');
  $routes['/tracks'] = array('file' => 'views/tracks/index');
  $routes['/group'] = array('file' => 'views/groups/show');