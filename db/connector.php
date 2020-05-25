<?php declare(strict_types=1);

final class Connector {
    private static $instance = null;
    private $database = null; 

    public static function getInstance(): Connector {
        if ( is_null(static::$instance) ) {
            static::$instance = new self();
        }
        return static::$instance;
    }

    public function db() {
        return $this->database;
    }
    private function __construct() {
        $this->database = new SQLite3('db/chinook.db');
    }
    private function __clone() {}
    private function __wakeup() {}
}