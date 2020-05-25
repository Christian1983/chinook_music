<?php 
    class Album extends Base {
        
        public function tracks() {
            return Track::where(['AlbumId' => $this->AlbumId]);
        }

        public function artist() {
            return Artist::where(['AristId' => $this->ArtistId]);
        }
    }
?>