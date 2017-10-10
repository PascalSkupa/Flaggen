<?php

require_once "flagRec.php";
require_once "flagTri.php";

$myFlag[] = new flagRec(
"Gute Flagge", "Blau", "Rechteck", 2, 3
);
$myFlag[] = new flagTri(
"Gute Flagge", "Blau", "Rechteck", 2, 3
);

foreach ($myFlag as $item) {
  # interface pro item
  echo $item. " // Fläche: ".$item->getArea() ."</br>";
}
