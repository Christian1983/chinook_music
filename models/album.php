<?php 
    class Album extends Base {
        
        public function tracks() {
            return Track::where(['AlbumId' => $this->AlbumId]);
        }
    }
?>