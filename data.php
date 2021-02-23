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

// todo : cat class = change habitat

// Creatureクラスのコンストラクタで配列にプッシュしてしまっているので、インスタンスした後に個々の変数に入れる必要はないかも。
$lion = new Cat('lion', 'lion.png', 'jungle');
$tiger = new Cat('tiger', 'tiger.png', 'jungle');
$leopard = new Cat('leopard', 'leopard.png', 'jungle');

$wolf = new Canidae('wolf', 'wolf.png');
$tanuki = new Canidae('raccoon dog', 'tanuki.png');

// todo : bovide = setVoice

$cow = new Bovidae('cow', 'cow.png');
$sheep = new Bovidae('sheep', 'sheep.png');

$falcon = new Bird('Falcon', 'falcon.png', 100);
$sparrow = new Bird('Sparrow', 'sparrow.png', 40);
$pigeon = new Bird('Pigeon', 'pigeon.png', 70);

$turtle = new Reptile('turtle', 'turtle.png');
$crocodile = new Reptile('crocodile', 'crocodile.png');
$lizard = new Reptile('lizard', 'lizard.png');

$ant = new Insect('Ant', 'ant.png');
$mosquito = new Insect('Mosquito', 'mosquito.png');
$beetle = new Insect('Beetle', 'beetle.png');

$shark = new Fish('Shark', 'shark.png', 300);
$salmon = new Fish('Salmon', 'salmon.png', 3000);
$shark->setDesc('ジンベエザメの場合は300個のの卵。種類によって、卵生、卵胎生、胎生など様々である。');
$salmon->setDesc('サケのメスのお腹には、だいたい3,000～4,000粒の卵が入っています。
体の大きなメスでは多く、小さなメスでは少ない傾向にあります。
メスはほとんどの場合、この卵を数回に分けて産みます。');


// foreach(Creature::getCreatures() as $val){
//     echo $val->getName() . "<br>";
//     echo $val->getId() . "<br>";
// }

?>