<?php 

class Creature{
	private static $count = 0;

	private $id;
	private $name;
	private $type; // = 子クラス
	private $img;
	private $description;
	
	public function __construct($name, $type, $img){
		self::$count ++ ;
		
		$this->id = self::$count;
		$this->name = $name;
		$this->type = $type;
		$this->img = $img;

	}

	// getter
	public static function getCount(){ return self::$count; }
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