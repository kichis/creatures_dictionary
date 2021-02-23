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


// Creatureクラスのコンストラクタで配列にプッシュしてしまっているので、インスタンスした後に個々の変数に入れる必要はないかも。
$lion = new Cat('ライオン', 'Lion', 'lion.png', 'アフリカの（主に）サバンナや草原など');
$tiger = new Cat('トラ', 'Tiger', 'tiger.png', 'アジアおよびロシア');
$leopard = new Cat('ヒョウ', 'Leopard', 'leopard.png', 'アフリカ〜中央アジア〜極東までの多様な気候帯');

$wolf = new Canidae('オオカミ', 'Wolf', 'wolf.png');
$tanuki = new Canidae('タヌキ', 'Raccoon dog', 'tanuki.png');

$cow = new Bovidae('ウシ', 'Cow', 'cow.png');
$cow->setVoice('モ〜');
$sheep = new Bovidae('ヒツジ', 'Sheep', 'sheep.png');
$sheep->setVoice('めぇ〜');

$falcon = new Bird('ハヤブサ', 'Falcon', 'falcon.png', 100);
$sparrow = new Bird('スズメ', 'Sparrow', 'sparrow.png', 40);
$pigeon = new Bird('ハト', 'Pigeon', 'pigeon.png', 70);

$turtle = new Reptile('カメ', 'turtle', 'turtle.png');
$crocodile = new Reptile('ワニ', 'crocodile', 'crocodile.png');
$lizard = new Reptile('トカゲ', 'lizard', 'lizard.png');

$ant = new Insect('アリ', 'Ant', 'ant.png');
$mosquito = new Insect('蚊', 'Mosquito', 'mosquito.png');
$beetle = new Insect('カブトムシ', 'Beetle', 'beetle.png');

$shark = new Fish('サメ', 'Shark', 'shark.png', 300);
$salmon = new Fish('サケ', 'Salmon', 'salmon.png', 3000);

$shark->setDesc('ジンベエザメの場合は300個のの卵。種類によって、卵生、卵胎生、胎生など様々である。');
$salmon->setDesc('サケのメスのお腹には、だいたい3,000～4,000粒の卵が入っています。
体の大きなメスでは多く、小さなメスでは少ない傾向にあります。
メスはほとんどの場合、この卵を数回に分けて産みます。');


?>