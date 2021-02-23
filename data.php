<?php 
include "creature.php";
include "mammalian.php";
include "cat.php";
include "canidae.php";
include "bovidae.php";
include "bird.php";
include "reptile.php";
include "insect.php";
include "fish.php";

// todo : all = setDesc
// todo : all = change image

// $turtle = new Creature('turtle', 'reptile', 'this is image');/

$cat = new Mammalian('lion', 'this is image', 'cat'); 
echo $cat->getId() . "<br>";
echo $cat->getName() . "<br>";
echo $cat->getType() . "<br>";
echo $cat->getImg() . "<br>";
echo $cat->getFamily() . "<br>";


// todo : cat class = change habitat

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

// todo : bovide = setVoice

$cow = new Bovidae('cow', 'imag!');
$cow = new Bovidae('sheep', 'imag!');
echo $cow->getId() . "<br>";
echo $cow->getName() . "<br>";
echo $cow->getType() . "<br>";
echo $cow->getImg() . "<br>";
echo $cow->getFamily() . "<br>";

$falcon = new Bird('Falcon', 'falcons image', 100);
$sparrow = new Bird('Sparrow', 'sparrow image', 40);
$pigeon = new Bird('Pigeon', 'pigeon image', 70);
echo $falcon->getId() . "<br>";
echo $falcon->getName() . "<br>";
echo $falcon->getType() . "<br>";
echo $falcon->getImg() . "<br>";
echo $falcon->getSpeed() . "<br>";

$turtle = new Reptile('turtle', 'image');
$crocodile = new Reptile('crocodile', 'image');
$lizard = new Reptile('lizard', 'image');
echo $turtle->getId() . "<br>";
echo $turtle->getName() . "<br>";
echo $turtle->getType() . "<br>";
echo $turtle->getImg() . "<br>";


$ant = new Insect('Ant', 'insect image');
$mosquito = new Insect('Mosquito', 'insect image');
$beetle = new Insect('Beetle', 'insect image');
echo $ant->getId() . "<br>";
echo $ant->getName() . "<br>";
echo $ant->getType() . "<br>";
echo $ant->getImg() . "<br>";

$shark = new Fish('Shark', 'shark image', 300);
$salmon = new Fish('Salmon', 'salmon image', 3000);
$shark->setDesc('ジンベエザメの場合は300個のの卵。種類によって、卵生、卵胎生、胎生など様々である。');
$salmon->setDesc('サケのメスのお腹には、だいたい3,000～4,000粒の卵が入っています。
体の大きなメスでは多く、小さなメスでは少ない傾向にあります。
メスはほとんどの場合、この卵を数回に分けて産みます。');
echo $shark->getId() . "<br>";
echo $shark->getName() . "<br>";
echo $shark->getType() . "<br>";
echo $shark->getImg() . "<br>";
echo $shark->getNumEggs() . "<br>";
echo $shark->getDesc() . "<br>";

echo $salmon->getId() . "<br>";
?>