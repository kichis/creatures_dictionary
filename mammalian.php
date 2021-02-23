<?php 

class Mammalian extends Creature{
    private $family;

    // 引数が同じ数で種類が違うとわかりにくいだろうか？
    public function __construct($name, $img, $family){
        
        $this->family = $family;
        parent::__construct($name, 'Mammalian', $img);
    }

    public function getFamily(){ return $this->family; }
}

?>