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
            return $this -> title . ": " . $this -> subtitle;
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

$f1 = new Film("Matrix");

$f2 = new Film("Fantozzi 2");
$f2 -> subtitle = "il ritorno di Fantozzi";

$f3 = new Film("Peter Pan");
$f3 -> subtitle = "il ritorno all'isola che non c'è";
$f3 -> director = "Robin Budd";

echo $f1 . "<br>";
echo $f2 . "<br>";
echo $f3 . "<br>";

?>