<?php
// PHP DASAR
// SINTAKS DASAR PHP

// **Standar output
// echo, print -> mencetak string / integer / variabel
// print_r -> mencetak array
// var_dump -> debugging

// echo "Ammar Ziddan";
// print("Ammar Ziddan");
// print_r("Ammar Ziddan");
// var_dump("Ammar Ziddan");

// **Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// ** Variabel dan tipe data
// variabel: string, integer, boolean, array
// diawali dengan $
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
// tidak boleh memakai '-'
// tidak boleh ada spasi
$nama = "Ammar Ziddan";
$nama_hari = "Jum'at";
// echo $nama_hari;

// echo "Halo nama saya $nama";
// echo 'Halo nama saya $nama';

// **Operator
// aritmatika
// + - * / %
// echo 3 + 2;

// **Concatination / Penggabung string
// .
// $nama_depan = 'Ammar';
// $nama_belakang = 'Ziddan';
// echo $nama_depan . ' ' . $nama_belakang;

// **Assigment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x += 5;
// echo $x;

// $string = "string";
// $string .= " gabung";
// echo $string;

// **Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(5 == 5);
// identitas
// ===, !==
// var_dump(1 === '1');

// **Logika
// &&, ||, ! (AND, OR, NOT)
// $x = 21;
// var_dump($x < 20 || $x % 2 == 0);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaks PHP</title>
</head>

<body>
    <!-- 1. PHP di dalam HTML -->
    <!-- <h1>Selamat datang, <?php echo $nama; ?></h1> -->

    <!-- 2. HTML di dalam PHP -->

    <!-- <?php
            echo "<h1>Halo Ziddan!</h1>";
            ?> -->


</body>

</html>