<?php 

class Creature{
	private static $id = 0;

	private $name;
	private $type; // = 子クラス
	private $img;
	private $description;
	
	public function __construct($name, $type, $img){
		self::$id ++ ;

		$this->name = $name;
		$this->type = $type;
		$this->img = $img;

	}

	// getter
	public static function getId(){ return self::$id; }
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