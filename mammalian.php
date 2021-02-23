<?php 

class Mammalian extends Creature{
    private $family;

    // 引数が同じ数で種類が違うとわかりにくいだろうか？
    public function __construct($name, $img, $family){
        parent::__construct($name, 'Mammalian', $img);

        $this->family = $family;
    }

    public function getFamily(){ return $this->family; }
}



?>