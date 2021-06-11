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
<h2>Exercice 2 :
Créez trois variables : nom, prénom, âge. Afficher ces variables dans une phrase(ex: Je m'appelle "nom prénom" et j'ai "age" ans.)</h2>
</div>
</div>


<?php
$nom = 'Joffroy';
$prenom = 'Toni';
$age = 2;
$phrase = 'Bonjour, je m\'appelle'. ' ' . $nom . ' ' . $prenom . ' ' . 'et j\'ai'. ' ' . $age . ' ' . 'ans.';

echo($phrase);
?>
    
</body>
</html>


