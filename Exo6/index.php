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
<h2>Exercice 6 :
Créez une variable magnitude allant de 0 à 9. Gérez l'affichage selon la magnitude.</h2>
<ul class="list-group">
  <li class="list-group-item">1. Micro-séisme impossible à ressentir</li>
  <li class="list-group-item">2. Micro-séisme impossible à ressentir mais enregistrable par les sismomètres</li>
  <li class="list-group-item">3. Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti</li>
  <li class="list-group-item">4. Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats</li>
  <li class="list-group-item">5. Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes</li>
  <li class="list-group-item">6. Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre</li>
  <li class="list-group-item">7. Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance</li>
  <li class="list-group-item">8. Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres</li>
  <li class="list-group-item">9. Séisme capable de tout détruire sur une très vaste zone</li>
</ul>
</div>
</div>



<?php

$richter = rand(1, 9);
switch ($richter) {
    case 1:
        var_dump("Magnétude de niveau 1 : Micro-séisme impossible à ressentir.");
        break;
    case 2:
        var_dump("Magnétude de niveau 2 : Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.");
        break;
    case 3:
        var_dump("Magnétude de niveau 3 : Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.");
        break;
    case 4:
        var_dump("Magnétude de niveau 4 : Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.");
        break;
    case 5:
        var_dump("Magnétude de niveau 5 : Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.");
        break;
    case 6:
        var_dump("Magnétude de niveau 6 : Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.");
        break;
    case 7:
        var_dump("Magnétude de niveau 7 : Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.");
        break;
    case 8:
        var_dump("Magnétude de niveau 8 : Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.");
        break;
    case 9:
        var_dump("Magnétude de niveau 9 : Séisme capable de tout détruire sur une très vaste zone.");
        break;
    default:
        var_dump("Valeur inconnue");
}




?>
    
</body>
</html>


