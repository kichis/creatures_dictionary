<?php 

class Bovidae extends Mammalian{
    private $voice;

    public function __construct($name, $img){
        parent::__construct($name, $img, 'Bovidae');
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