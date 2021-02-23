<?php 

class Cat extends Mammalian{
    private $habitat;

    public function __construct($nameJP, $nameEN, $img, $habitat){
        parent::__construct($nameJP, $nameEN, $img, 'ネコ科', 'Cat');

        $this->habitat = $habitat;
    }

    // getter
    public function getHabitat(){ return $this->habitat; }

}

?>