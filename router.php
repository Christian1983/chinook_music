<?php
    class Router {
        private $routes;
        public $pathes;

        public function __construct() {
            $this->routes = array();
            $this->read_file();
        }

        public function __call($func, $params) {
            return $this->pathes[$func];
        }

        public function view() {
            $request = str_replace(' ', '', $_SERVER['REQUEST_URI']);
            $route = $this->routes[$request];

            if(is_null($route) == true)
                if(file_exists(substr($request, 1)) == true)
                    return substr($request, 1);
                else
                    return 'static/404.html';
            else
                return $route;
        }


        // private
        private function read_file() {
            if (($handle = fopen("routes.csv", "r")) !== FALSE) {
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    $file = $data[1] . ".php";

                    $this->routes[$data[0]] = $file;

                    // for meta programming path functions 
                    // eg.:
                    // $router->tracks_path
                    // $router->track_path($track) 
                    $this->pathes[$data[2] . '_path'] = $data[0];
                }
                fclose($handle);
            }            
        }
    }