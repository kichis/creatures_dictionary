<?php 

class Creature{
	private static $count = -1;
	private static $creatures = array();

	private $id;
	private $nameJP;
	private $nameEN;
	private $typeJP; 
	private $typeEN; // = 子クラス
	private $img;  // img/~以降のパス
	private $description;
	
	public function __construct($nameJP, $nameEN, $typeJP, $typeEN, $img){		
		$this->id = ++self::$count;
		$this->nameJP = $nameJP;
		$this->nameEN = $nameEN;
		$this->typeJP = $typeJP;
		$this->typeEN = $typeEN;
		$this->img = $img;

		self::$creatures[] = $this;
	}

	public static function findById($id){
		return self::$creatures[$id];
	}

	// getter
	public static function getCount(){ return self::$count; }
	public static function getCreatures(){ return self::$creatures; }
	public function getId(){ return $this->id; }
	public function getNameJP(){ return $this->nameJP; }
	public function getNameEN(){ return $this->nameEN; }
	public function getTypeJP(){ return $this->typeJP; }
	public function getTypeEN(){ return $this->typeEN; }
	public function getImg(){ return $this->img; }
	public function getdesc(){ return $this->description; }

	// setter
	public function setDesc($description){
		$this->description = $description;
	}

}

?>