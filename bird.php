<?php 

class Bird extends Creature{
    private $speed; // km/h(平均速度)

    public function __construct($nameJP, $nameEN, $img, $speed){
        parent::__construct($nameJP, $nameEN, '鳥類', 'Bird', $img);

        $this->speed = $speed;
    }

    public function getSpeed(){ return $this->speed; }
}


?>