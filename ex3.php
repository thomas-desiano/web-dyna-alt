<?php

$size = 12;
$color = 0;
$message = "Aucun message";

if(!empty($_POST['size']))$size=$_POST['size'];

if(!empty($_POST['size_change'])){ 
	if($_POST['size_change']=="+")$size++;
	if($_POST['size_change']=="-")$size--;
}

if(!empty($_POST['color']))$color=$_POST['color'];
if(!empty($_POST['message']))$message=$_POST['message'];

?>
<!doctype html>
<html lang="fr">
<head>
	<title>TP1 - Exo3</title>
	<meta charset="utf-8">
	<meta name="description" content="TP1-Exo3">

</head>

<body>

	<form id="1" method="POST"> <!--Formulaire texte rouge -->
		<input type="hidden" value="bonjour1" name="message" id="message" >
		<input type="hidden" value="#ff0000" name="color" id="color" >
		<input type="hidden" value="25" name="size" id="size" >
	</form>
	<form id="2" method="POST"> <!--Formulaire texte vert -->
		<input type="hidden" value="bonjour2" name="message" id="message" >
		<input type="hidden" value="#2ff000" name="color" id="color" >
		<input type="hidden" value="50" name="size" id="size" >
	</form>
	<form id="3" method="POST"> <!--Formulaire texte bleu -->
		<input type="hidden" value="bonjour3" name="message" id="message" >
		<input type="hidden" value="#0000ff" name="color" id="color" >
		<input type="hidden" value="100" name="size" id="size" >
	</form>

	<h2><a href='#' onclick='document.getElementById("1").submit()'>Afficher "bonjour1" en rouge, avec une taille de 25px</a></h2>
	<h2><a href='#' onclick='document.getElementById("2").submit()'>Afficher "bonjour2" en vert, avec une taille de 50px</a></h2>
	<h2><a href='#' onclick='document.getElementById("3").submit()'>Afficher "bonjour3" en bleu, avec une taille de 100px</a></h2>


	<p>
		<?php if(!empty($_POST)) { ?>

			<div style="font-size: <?=$size?>px;color:<?=$color?>"><?=$message?></div>
		<?php }else{ ?>
			<div style="font-size: 50px;color: #ff0000;">Un message d'erreur</div>

		<?php } ?>
	</p>

	<form method="POST"> <!-- Form: changement taille -->

		<input type="hidden" value="<?=$message?>" name="message" id="message" >
		<input type="hidden" value="<?=$color?>" name="color" id="color" >
		<input type="hidden" value="<?=$size?>" name="size" id="size" >

		<input type="submit" id="size_change" name="size_change" value="+">
		<input type="submit" id="size_change" name="size_change" value="-">
	</form>

	<form method="POST"> <!-- Form: soumission message -->

		<label for="message">Message : </label>
		<input type="text" value="Message" name="message" id="message">

		<label for="size">Size : </label>
		<input type="number" value="12" name="size" id="size">

		<label for="color">Color : </label>
		<input type="color" name="color" id="color">

		<input type="submit" value="Valider">
	</form>
</body>

</html> 