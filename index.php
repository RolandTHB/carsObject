<?php
include 'include.php';

$audiRS1 = new Audi('Audi', 'RS1', 100000, 5, 1, 1, 0);
$z900 = new Kawasaki('Z900', 9200, 1);

$audiRS1->clim = 4;
echo"<br/>";
$audiRS1->model = 'Fiat';
echo"<br/>";
$audiRS1->isQuatro = 5;
echo"<br/>";
echo"$audiRS1->model";
echo"<br/>";

var_dump($audiRS1);
var_dump($z900);


?>