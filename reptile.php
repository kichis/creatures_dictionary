<?php 

class Reptile extends Creature{
    public function __construct($nameJP, $nameEN, $img){
        parent::__construct($nameJP, $nameEN, '爬虫類', 'Reptile', $img);
    }
}


?>