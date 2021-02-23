<?php 

class Fish extends Creature{
    private $numEggs;

    public function __construct($name, $img, $numEggs){
        parent::__construct($name, 'Fish', $img);

        $this->numEggs = $numEggs;
    }

    public function getNumEggs(){ return $this->numEggs; }
}

?>