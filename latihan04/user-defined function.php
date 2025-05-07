<?php
// USER-DEFINED FUNCTION

function greetings($waktu = "Datang", $nama = "User")
{
    return "Selamat $waktu $nama";
}

function penjumlahan($a, $b)
{
    $total = $a + $b;
    return "$a + $b = $total";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-defined FUNCTION</title>
</head>

<body>
    <h1><?= greetings('', "Ammar"); ?></h1>

    <p><?= penjumlahan(33, 17) ?></p>
</body>

</html>