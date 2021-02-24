<?php 
// エラー確認用
ini_set('display_errors', 1);
include "data.php";

$id = $_GET['id'];
$target = Creature::findById($id);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>いきもの図鑑</title>
</head>
<body>
    <div class="nav nav-bar bg-secondary">
        <h3 class="text-light my-3 ml-5">いきもの図鑑</h3>
    </div>

    <div class="container">
        <div class="text-center py-3">
            <img src="img/<?= $target->getImg(); ?>" alt="<?=$target->getNameEN();?>" width="400" height="300">
        </div>
        <div id="body" class="text-center my-3">
            <h2><strong><?= $target->getNameJP()?></strong></h2>
            <h4 class="text-muted mb-3"><?= $target->getNameEN();?></h4>

            <h4 class="d-inline-flex"><span class="font-weight-bold mx-3"><?= $target->getTypeJP()?></span><span class="text-muted font-weight-normal"><?=$target->getTypeEN();?></span></h4>
            <?php if($target instanceof Mammalian):?>
                <h5 class="d-inline-flex mx-3"><span class="font-weight-bold mx-2"><?=$target->getFamilyJP()?></span><span class='text-muted ml-1'><?=$target->getFamilyEN()?></span></h5>
            <?php endif;
            
            $info = array('topic'=>'', 'value'=>'');
            if($target instanceof Cat){
                $info['topic'] = '生息地 ： ';
                $info['value'] = $target->getHabitat();
            }else if($target instanceof Bovidae){
                $info['topic'] = '鳴き声 ： ';
                $info['value'] = $target->getVoice();
            }else if($target instanceof Bird){
                $info['topic'] = '飛行速度 ： ';
                $info['value'] = $target->getSpeed() . 'km/h';
            }else if($target instanceof Fish){
                $info['topic'] = '産卵する卵の数 ： ';
                $info['value'] = $target->getNumEggs() . '個';				
            }
            ?>
            <h5 class="my-4"><?= $info['topic']?><strong><?= $info['value']?></strong></h5>
        </div>

        <div id="description" class="d-flex justify-content-center mt-5">
            <p class="w-75"><?= $target->getDesc(); ?></p>
        </div>
    </div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>