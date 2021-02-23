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
			<img src="img/<?= $creature->getImg();?>" alt="" width="100" height="200" class="bd-placeholder-img card-img-top border-bottom">
			<!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg> -->
			<div class="card-body">
				<h5 class="card-title"><?= $creature->getNameJP() . $creature->getNameEN() ?></h5>
				<p class="card-text"><strong><?= $creature->getTypeJP() . $creature->getTypeEN() ?></strong></p>
				<?php if($creature instanceof mammalian):?>
					<p class="card-text"><strong><?= $creature->getFamilyJP() . $creature->getFamilyEN() ?></strong></p>
					<?php if($creature instanceof Cat):?>
						<p class="card-text"><strong><?= $creature->getHabitat() ?></strong></p>
					<?php elseif($creature instanceof Bovidae):?>
						<p class="card-text"><strong><?= $creature->getVoice() ?></strong></p>
					<?php endif?>
				<?php elseif($creature instanceof Bird):?>
					<p class="card-text"><strong><?= $creature->getSpeed() ?></strong></p>
				<?php elseif($creature instanceof Fish):?>
					<p class="card-text"><strong><?= $creature->getNumEggs() ?></strong></p>
				<?php endif?>
				<p class="card-text"><?= mb_strimwidth( strip_tags( $creature->getDesc() ), 0, 50, '…', 'UTF-8' );?></p>
				<a href="detail.php?id=<?= $creature->getId() ?>" class="btn btn-info stretched-link">詳しく</a>
			</div>
		</div>
		<?php endforeach ?>
	</div>



	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>