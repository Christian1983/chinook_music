<?php
class Base {
    private $db;
    private $table;
    protected $properties = array();

    public function __construct($params) {
        // params as key value
        $this->db = new SQLite3('db/chinook.db');
        
        foreach($params as $key => $value) {
            //echo "<p> $key => $value </p>";
            $this->properties[$key] = $value;
        }
    }

    public function __set($prop, $value) {
        $this->properties[$prop] = $value;
    }

    public function __get($prop) {
        return $this->properties[$prop];
    }

    public function __toString() {
        $tmp="";
        foreach($properties as $key => $value) {
            $tmp . "$key => $value";
        }
        return $tmp;
    }
}
?>