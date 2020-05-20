<?php
class Base {
    private $db;
    private $table;

    function __construct() {
        $this->db = new SQLite3('db/chinook.db');
    }
}
?>