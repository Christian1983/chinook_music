<?php 
class Track extends Base {

    public function album() {
        $db->exec('select * from albums where AlbumId =' . $this->album_id);
    }

    public function artist() {
        $db->exec('select * from artists where ArtistId =' . $this->album_id);
    }

}
?>