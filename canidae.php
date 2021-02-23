<?php 

// イヌ科
class Canidae extends Mammalian{
    
    public function __construct($nameJP, $nameEN, $img){
        parent::__construct($nameJP, $nameEN, $img, 'イヌ科', 'Canidae');
    }
}

?>