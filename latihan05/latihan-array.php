<?php

// $mahasiswa = ["Ammar Ziddan", "230210200062", "kelautan", "ziddan@email.com"];

$mahasiswa = [
    ["Ammar Ziddan", "230210200062", "kelautan", "ziddan@email.com"],
    ["Raffy", "230210200072", "perikanan", "raffy@email.com"]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <!-- <ul>
        <li><?= $mahasiswa[0]; ?></li>
        <li><?= $mahasiswa[1]; ?></li>
        <li><?= $mahasiswa[2]; ?></li>
        <li><?= $mahasiswa[3]; ?></li>
    </ul> -->

    <?php foreach ($mahasiswa as $mhs): ?>
        <ul>
            <li><?= $mhs[0]; ?></li>
            <li><?= $mhs[1]; ?></li>
            <li><?= $mhs[2]; ?></li>
            <li><?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>