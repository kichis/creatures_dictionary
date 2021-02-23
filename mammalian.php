<?php 

class Mammalian extends Creature{
    private $familyJP;
    private $familyEN;

    // 引数が同じ数で種類が違うとわかりにくいだろうか？
    public function __construct($nameJP, $nameEN, $img, $familyJP, $familyEN){
        parent::__construct($nameJP, $nameEN, '哺乳類', 'Mammalian', $img);
        $this->familyJP = $familyJP;
        $this->familyEN = $familyEN;
    }

    public function getFamilyJP(){ return $this->familyJP; }
    public function getFamilyEN(){ return $this->familyEN; }
}

?>