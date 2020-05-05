<!doctype html>
<html lang="fr">
<head>
	<title>TP1 - Exo2</title>
	<meta charset="utf-8">
	<meta name="description" content="ex2">

</head>

<body>

	<h2><a href="./ex2.php?message=Bonjour&size=25&color=%23ff0000">Afficher "Bonjour" en rouge, avec une taille de 25px</a></h2>
	<h2><a href="./ex2.php?message=Bonjour&size=50&color=%232ff000">Afficher "Bonjour" en vert, avec une taille de 50px</a></h2>
	<h2><a href="./ex2.php?message=Bonjour&size=100&color=%230000ff">Afficher "Bonjour" en bleu, avec une taille de 100px</a></h2>
	<p>
		<?php 
			$size = 12;
			$color = 0;
			$message = "Aucun message";

			if(!empty($_GET['size']))$size=$_GET['size'];
			if(!empty($_GET['color']))$color=urldecode($_GET['color']);
			if(!empty($_GET['message']))$message=urldecode($_GET['message']);

		?>
		
		<?php if(!empty($_GET)) { ?>

			<div style="font-size: <?=$size?>px;color:<?=$color?>"><?=$message?></div>
		<?php }else{ ?>
			<div style="font-size: 50px;color: #ff0000;">Bonjour</div>

		<?php } ?>
	</p>
	<h3>
  		<a href="./ex2.php?message=<?=urlencode($message)?>&size=<?=$size+1?>&color=<?=urlencode($color)?>"><button>+</button></button></a>  
  		<a href="./ex2.php?message=<?=urlencode($message)?>&size=<?=$size-1?>&color=<?=urlencode($color)?>"><button>-</button></a>

  	</h3>

	<form method="GET">

		<label for="message">Message : </label>
		<input type="text" value="Bonjour" name="message" id="message">

		<label for="size">Size : </label>
		<input type="number" value="12" name="size" id="size">

		<label for="color">Color : </label>
		<input type="color" name="color" id="color">

		<input type="submit" value="Valider">
	</form>
</body>

</html> 