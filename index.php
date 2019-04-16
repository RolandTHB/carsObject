<?php
include 'include.php';

$audiRS1 = new Audi('Audi', 'RS1', 100000, 5, 1, 1, 0);
$moto = new Yamaha('Kawasaki', 'Z900', 8000, 1,1);
$s200 = new Yamaha('Yamaha','s200',5222,1,1);
$R8 = new Audi('Audi','R8',1444,5,1,1,0);

var_dump($audiRS1);
var_dump($moto);
var_dump($s200);
var_dump($R8);
?>