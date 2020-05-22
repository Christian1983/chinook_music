<?php 
class Track extends Base {

    public static function all() {
        $sdb = new SQLite3('db/chinook.db');
        $res = $sdb->query('select * from tracks;');

        //instance array
        $iarr=array();
        $i=0;
        while ($row = $res->fetchArray()) {
            $properties=array();
            foreach($row as $key => $value) {
                // ignore numerical keys
                if( is_numeric($key) )
                    continue;
                $properties[$key] = $value;
            }

            $iarr[$i] = new Track($properties);
            $i = $i + 1;
        }
        return $iarr;
    }
    

    public static function find($id) {
        if (is_numeric($id))
            $result = $db->exec('select * from tracks where TrackId =' . $this->$id);
            echo $result;
    }

    public function album() {
        $db->exec('select * from albums where AlbumId =' . $this->album_id);
    }

    public function artist() {
        $db->exec('select * from artists where ArtistId =' . $this->album_id);
    }
}
?>