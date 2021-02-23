<?php 

class Creature{
	private static $count = -1;
	private static $creatures = array();

	private $id;
	private $name;
	private $type; // = 子クラス
	private $img;
	private $description;
	
	public function __construct($name, $type, $img){		
		$this->id = ++self::$count;
		$this->name = $name;
		$this->type = $type;
		$this->img = $img;

		self::$creatures[] = $this;
	}

	// getter
	public static function getCount(){ return self::$count; }
	public static function getCreatures(){ return self::$creatures; }
	public function getId(){ return $this->id; }
	public function getName(){ return $this->name; }
	public function getType(){ return $this->type; }
	public function getImg(){ return $this->img; }
	public function getdesc(){ return $this->description; }

	// setter
	public function setDesc($description){
		$this->description = $description;
	}

}

?>