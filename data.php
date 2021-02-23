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
$lion = new Cat('lion', 'image', 'jungle');
$tiger = new Cat('tiger', 'image', 'jungle');
$leopard = new Cat('leopard', 'image', 'jungle');

$wolf = new Canidae('wolf', 'images');
$tanuki = new Canidae('raccoon dog', 'images');

// todo : bovide = setVoice

$cow = new Bovidae('cow', 'imag!');
$cow = new Bovidae('sheep', 'imag!');

$falcon = new Bird('Falcon', 'falcons image', 100);
$sparrow = new Bird('Sparrow', 'sparrow image', 40);
$pigeon = new Bird('Pigeon', 'pigeon image', 70);

$turtle = new Reptile('turtle', 'image');
$crocodile = new Reptile('crocodile', 'image');
$lizard = new Reptile('lizard', 'image');

$ant = new Insect('Ant', 'insect image');
$mosquito = new Insect('Mosquito', 'insect image');
$beetle = new Insect('Beetle', 'insect image');

$shark = new Fish('Shark', 'shark image', 300);
$salmon = new Fish('Salmon', 'salmon image', 3000);
$shark->setDesc('ジンベエザメの場合は300個のの卵。種類によって、卵生、卵胎生、胎生など様々である。');
$salmon->setDesc('サケのメスのお腹には、だいたい3,000～4,000粒の卵が入っています。
体の大きなメスでは多く、小さなメスでは少ない傾向にあります。
メスはほとんどの場合、この卵を数回に分けて産みます。');


// foreach(Creature::getCreatures() as $val){
//     echo $val->getName() . "<br>";
//     echo $val->getId() . "<br>";
// }

?>