<?php 
    class Artist extends Base {
        
        public function albums() {
            return Album::where(['ArtistId' => $this->ArtistId]);
        }

    }
?>