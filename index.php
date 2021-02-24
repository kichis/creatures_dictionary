<?php
// エラー確認用
ini_set('display_errors', 1);

include "data.php";



?>


<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>いきもの図鑑</title>
</head>
<body class="container">
	<div class="d-flex justify-content-center align-items-center" style="height:200px">
		<h1 class="text-secondary m-0">いきもの図鑑</h1>
	</div>

	<div class="d-flex justify-content-around pt-5 row">
		<?php foreach(Creature::getCreatures() as $creature): ?>
		<div class="card my-3" style="width: 18rem;">		
			<img src="img/<?= $creature->getImg();?>" alt="creature image" width="100" height="200" class="bd-placeholder-img card-img-top border-bottom">
			<div class="card-body">
				<h5 class="card-title"><strong><?=$creature->getNameJP()?></strong><span class="text-muted  ml-3"><?=$creature->getNameEN()?></span></h5>
				<p class="card-subtitle d-inline-flex"><strong><?= $creature->getTypeJP()?></strong><span class="text-muted ml-1"><?= $creature->getTypeEN()?></span></p>

				<!-- 哺乳類の場合はもう１段階細かい分類まで表示 -->
				<?php if($creature instanceof Mammalian):?>
					<p class='card-subtitle d-inline-flex'><small><strong><?=$creature->getFamilyJP()?></strong><span class='text-muted ml-1'><?=$creature->getFamilyEN()?></span></small></p>
				<?php 
					endif;

				// classごとに異なる項目を表示するエリア
				$info = array('topic'=>'', 'value'=>'');
				if($creature instanceof Cat){
					$info['topic'] = '生息地 ： ';
					$info['value'] = $creature->getHabitat();
				}else if($creature instanceof Bovidae){
					$info['topic'] = '鳴き声 ： ';
					$info['value'] = $creature->getVoice();
				}else if($creature instanceof Bird){
					$info['topic'] = '飛行速度 ： ';
					$info['value'] = $creature->getSpeed() . 'km/h';
				}else if($creature instanceof Fish){
					$info['topic'] = '産卵する卵の数 ： ';
					$info['value'] = $creature->getNumEggs() . '個';				
				}
				?>
				<p class="card-text mt-1"><?= $info['topic']?><strong><?= $info['value']?></strong></p>

				<p class="card-text"><?= mb_strimwidth( strip_tags( $creature->getDesc() ), 0, 90, '…', 'UTF-8' );?></p>
				<a href="detail.php?id=<?= $creature->getId() ?>" class="stretched-link d-flex justify-content-end">詳しく</a>

			</div>
		</div>
		<?php endforeach ?>
	</div>



	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>