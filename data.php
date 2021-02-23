<?php 
include "creature.php";
include "mammalian.php";
include "cat.php";
include "canidae.php";
include "bovidae.php";


$turtle = new Creature('turtle', 'reptile', 'this is image');

$cat = new Mammalian('lion', 'this is image', 'cat'); 
echo $cat->getId() . "<br>";
echo $cat->getName() . "<br>";
echo $cat->getType() . "<br>";
echo $cat->getImg() . "<br>";
echo $cat->getFamily() . "<br>";

$lion = new Cat('lion', 'image', 'jungle');
$tiger = new Cat('tiger', 'image', 'jungle');
$leopard = new Cat('leopard', 'image', 'jungle');
echo $tiger->getId() . "<br>";
echo $tiger->getName() . "<br>";
echo $tiger->getType() . "<br>";
echo $tiger->getImg() . "<br>";
echo $tiger->getFamily() . "<br>";
echo $tiger->getHabitat() . "<br>";

$wolf = new Canidae('wolf', 'images');
$tanuki = new Canidae('raccoon dog', 'images');
echo $wolf->getId() . "<br>";
echo $wolf->getName() . "<br>";
echo $wolf->getType() . "<br>";
echo $wolf->getImg() . "<br>";
echo $wolf->getFamily() . "<br>";

$cow = new Bovidae('cow', 'imag!');
echo $cow->getId() . "<br>";
echo $cow->getName() . "<br>";
echo $cow->getType() . "<br>";
echo $cow->getImg() . "<br>";
echo $cow->getFamily() . "<br>";


?>