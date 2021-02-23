<?php 

class Insect extends Creature{
    public function __construct($nameJP, $nameEN, $img){
        parent::__construct($nameJP, $nameEN, '昆虫類', 'Insect', $img);
    }
}


?>