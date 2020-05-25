<?php
class Base {
    private $db;
    private $table;
    private $class_name;
    protected $properties = array();

    public function __construct($params) {
        $this->db = new SQLite3('db/chinook.db');
        $this->class_name = get_class($this);
        $this->table = strtolower($this->class_namme) . 's';

        foreach($params as $key => $value) {
            $this->properties[$key] = $value;
        }
    }

    public static function all() {
        $sdb = new SQLite3('db/chinook.db');
        $klass = get_called_class();
        $table = strtolower(get_called_class()) . 's';
        $res = $sdb->query("select * from $table;");

        //instance array
        $iarr=array();
        $i=0;
        while ($row = $res->fetchArray()) {
            $iarr[$i] = new $klass(BASE::build_properties_from_array($row));
            $i = $i + 1;
        }
        return $iarr;
    }

    public static function find($id) {
        if (is_numeric($id))
            $sdb = new SQLite3('db/chinook.db');
            $klass = get_called_class();
            $table = strtolower(get_called_class()) . 's';

            $result = $db->exec("select * from $table where $klass" . "Id = $id");
            $row = $res->fetchArray();
            return new $klass(BASE::build_properties_from_array($row));
    }

    public static function where($params) {
        $db = new SQLite3('db/chinook.db');
        $klass = get_called_class();
        $table = strtolower(get_called_class()) . 's';
        $query = "select * from $table where";

        $row=0;
        foreach($params as $key => $value) {
            if(sizeof($params) == 1 || sizeof($parmas) == $row-1)
                $query .= " $key = $value;";
            else
            $query .= " $key = $value AND";
        }

        $res = $db->query($query);
        $iarr=array();
        $i=0;
        while ($row = $res->fetchArray()) {
            $iarr[$i] = new $klass(BASE::build_properties_from_array($row));
            $i++;
        }

        return $iarr;        
    }

    public function __set($prop, $value) {
        $this->properties[$prop] = $value;
    }

    public function __get($prop) {
        return $this->properties[$prop];
    }


    // private
    private static function build_properties_from_array($array) {
        $properties=array();
        foreach($array as $key => $value) {
            // ignore numerical keys
            if( is_numeric($key) )
                continue;
            $properties[$key] = $value;
        }
        return $properties;
    }
}
?>