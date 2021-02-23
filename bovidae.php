<?php 

class Bovidae extends Mammalian{
    private $voice;

    public function __construct($nameJP, $nameEN, $img){
        parent::__construct($nameJP, $nameEN, $img, 'ウシ科', 'Bovidae');
    }

    // getter
    public function getVoice(){
        return $this->voice;
    }

    // setter
    public function setVoice($voice){
        $this->voice = $voice;
    }
}


?>