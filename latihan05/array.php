<?php
// ARRAY
// variabel array dapat memiliki banyak nilai
// elemen array boleh memiliki tipe data yang berbeda
// pasangan antara key & value
// key adalah index, dimulai dari 0

$hari = array("senin", "selasa", "rabu");
// print_r($hari);
// var_dump($arr1);

$bulan = ['Januari', 'Maret', 'April'];
// print_r($bulan);

$arr1 = ['string', 12, true];
// print_r($arr1);

// menampilkan elemen array
// echo $arr1[0];
// echo "<br>";
// echo $hari[2];

// menambahkan elemen baru ke array
var_dump($hari);
echo "<br>";
$hari[] = "kamis";
$hari[] = "jum'at";
var_dump($hari);
