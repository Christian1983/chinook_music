<?php 
class Track {
    public $name;
    public $album_id;
    public $media_type_id;
    public $genre_id;
    public $composer;
    public $duration;
    public $bytes;
    public $unit_price;

    function __construct($n, $aid, $mid, $gid, $composer, $duration, $bytes, $unit_price) {
        $this->name = $n;
        $this->album_id = $aid;
        $this->media_type_id = $mid;
        $this->genre_id = $gid;
        $this->composer = $composer;
        $this->duration = $duration;
        $this->bytes = $bytes;
        $this->unit_price = $unit_price;
    }

    public static function all() {
        $sdb = new SQLite3('db/chinook.db');
        $res = $sdb->query('select * from tracks;');

        //instance array
        $iarr=array();
        $i=0;
        while ($row = $res->fetchArray()) {
            $n = $row['Name'];
            $aid = $row['AlbumId'];
            $mid = $row['MediaTypeId'];
            $gid = $row['GenreId'];
            $composer = $row['Composer'];
            $duration = $row['Milliseconds'];
            $bytes = $row['Bytes'];
            $unit_price = $row['UnitPrice'];


            $iarr[$i] = new Track($n, $aid, $mid, $gid, $composer, $duration, $bytes, $unit_price);
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
}
?>