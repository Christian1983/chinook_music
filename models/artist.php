<?php 
    class Artist extends Base {
        
        public function albums() {
            return Album::where(['AlbumId' => $this->AlbumId]);
        }

    }
?>