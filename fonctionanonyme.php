<?php

//Creation d'une fonction anonyme


$nombre = [2,4,5,6];

$carre = array_map(fn ($nb) => $nb ** 2, $nombre);

var_dump($carre);

