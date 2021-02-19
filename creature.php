<?php 
// エラー確認用
ini_set('display_errors', 1);

class Creature{
	private $name;
	private $type;
	private $description;
	private $img;

	public static $count = 101;
	
	public function __construct($name, $type, $img){
		echo "creature constructed";
		$this->name = $name;
		$this->type = $type;
		$this->img = $img;
	}

	// public function hello(){
	// 	echo "this is hello of Creature";
	// }

	// getter
	public function getName(){ return $this->name; }
	public function getType(){ return $this->type; }
	public function getImg(){ return $this->img; }

}

$turtle = new Creature('turtle', 'reptile', 'this is image');
echo $turtle->getName() . '<br>';
echo $turtle->getType() . '<br>';
echo $turtle->getImg() . '<br>';
echo Creature::$count . '<br>';

?>