<?php 

class Fish extends Creature{
    private $numEggs;

    public function __construct($nameJP, $nameEN, $img, $numEggs){
        parent::__construct($nameJP, $nameEN, '魚類', 'Fish', $img);

        $this->numEggs = $numEggs;
    }

    public function getNumEggs(){ return $this->numEggs; }
}

?>