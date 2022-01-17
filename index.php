<?php 

class Film {

    public $title;
    public $subtitle;
    public $director;

    public function __construct($title) {
        
        $this -> title = $title;
    }

    public function getFullTitle() {

        if ($this -> subtitle != null) {
            return $this -> title . " " . $this -> subtitle;
        } else {
            return $this -> title;
        }
    }

    public function __toString() {

        if ($this -> director != null) {
            return $this -> getFullTitle() . " | " . $this-> director;
        } else {
            return $this->getFullTitle() . " | ???";
        }
    }
}

?>