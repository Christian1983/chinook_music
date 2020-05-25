<?php 
    class Album extends Base {
        
        public function tracks() {
            return Track::where(['AlbumId' => $this->AlbumId]);
        }

        public function artist() {
            return Artist::where(['AristId' => $this->ArtistId]);
        }

        public function price() {
            $tracks = $this->tracks();
            $price = 0.0;
            foreach($tracks as $track) {
                $price += $track->UnitPrice;
            }
            if(count($tracks) > 1)
                return round($price*0.9,2);
            else
                return $price;
        }
    }
?>