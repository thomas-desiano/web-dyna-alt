<?php


$message = $_GET["message"];

$size = $_GET["size"];

$color = $_GET["color"];


$msg .= '<div style="font-size: '. $size .'px;color:'.$color.'">'. $message .'</div>';

$form .= '
<form method="GET">
    <label for="message"> Message : </label>
    <input type="text" value="" name="message" id="message">
    <label for="size">Size : </label>
    <input type="number" value="10" name="size" id="size">
    <label for="color">Color :  </label>
    <input type="color" value="" name="color" id="color">
    <input type="submit" value="Valider">
</form>';

$link .= '
<a href="/web-dyna-alt/tp1/ex2.php?message=msg1&size=15&color=%23ff0000">Afficher msg1</a>
<a href="/web-dyna-alt/tp1/ex2.php?message=msg2&size=30&color=%2308ff00">Afficher msg2</a>
<a href="/web-dyna-alt/tp1/ex2.php?message=msg3&size=50&color=%230088ff">Afficher msg3</a>';


if (empty($message) or empty($size) or empty($color)){

    echo '/!\ Pas de message fournie /!\ ';

} else {

    echo $msg;

}

echo $form;

echo $link;