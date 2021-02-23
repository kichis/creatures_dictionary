<?php 

class Cat extends Mammalian{
    private $habitat;

    public function __construct($name, $img, $habitat){
        parent::__construct($name, $img, 'Cat');

        $this->habitat = $habitat;
    }

    // getter
    public function getHabitat(){ return $this->habitat; }

}

?>