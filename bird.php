<?php 

class Bird extends Creature{
    private $speed; // km/h(平均速度)

    public function __construct($name, $img, $speed){
        parent::__construct($name, 'Bird', $img);

        $this->speed = $speed;
    }

    public function getSpeed(){ return $this->speed; }
}


?>