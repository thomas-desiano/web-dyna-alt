<?php
$title="Exo5";
include "header.php";
include "functions.php";

$nbLignes = 2;
$nbColonnes = 2;

if(!empty($_GET['nbLignes']))$nbLignes=$_GET['nbLignes'];
if(!empty($_GET['nbColonnes']))$nbColonnes=$_GET['nbColonnes'];

?>

<h2><a href="ex5.php?nbLignes=2&nbColonnes=2">Créer un tableau 2*2</a></h2>
<h2><a href="ex5.php?nbLignes=5&nbColonnes=5">Créer un tableau 5*5</a></h2>
<h2><a href="ex5.php?nbLignes=10&nbColonnes=8">Créer un tableau 10*8</a></h2>

<?=createHtmlTable($nbLignes, $nbColonnes); ?>


<form method="GET">

	<label for="size">Nombre de lignes : </label>
	<input type="number" value="5" name="nbLignes" id="nbLignes">

	<label for="size">Nombre de colonnes : </label>
	<input type="number" value="5" name="nbColonnes" id="nbColonnes">

	<input type="submit" value="Valider">
</form>

<?php
include "footer.php";
?> 