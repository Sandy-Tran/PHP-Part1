<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>PHP</title>
</head>
<body>

<div class='container'>
<div class='text-center'>
<h1>PHP Partie 1</h1>
<h2>Exercice 5 :
Créez une variable âge et une variable genre. Afficher aléatoirement vous êtes une femme et vous avez X ans ou vous êtes un homme et vous avez X ans.</h2>
</div>
</div>



<?php

$age = 33;
$sexe = "f";


$ageString = "vous êtes majeur";
if ($age <= 18) {
    $ageString = "vous êtes mineur";
}

$sexeString = "femme";
$accord = "e";
if ($sexe === "h") {
    $sexeString = "homme";
    $accord = "";
}

var_dump("Vous êtes un" . $accord . " " . $sexeString . " et " . $ageString . $accord);





?>
    
</body>
</html>


