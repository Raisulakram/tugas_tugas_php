<?php
require 'KonversiSuhu.php'; 

$konversi1 = new KonversiSuhu('Celsius', 25, 'Fahrenheit');
$konversi2 = new KonversiSuhu('Fahrenheit', 80, 'Celsius');
$konversi3 = new KonversiSuhu('Celsius', 30, 'Rheamur');
$konversi4 = new KonversiSuhu('Rheamur', 24, 'Celsius');
$konversi5 = new KonversiSuhu('Fahrenheit', 50, 'Celsius');
$konversi6 = new KonversiSuhu('Rheamur', 15, 'Celsius');

$konversi1->cetak();
$konversi2->cetak();
$konversi3->cetak();
$konversi4->cetak();
$konversi5->cetak();
$konversi6->cetak();
?>
