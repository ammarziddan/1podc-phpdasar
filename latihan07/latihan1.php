<?php

$mahasiswa = [
    [
        "nama" => "Ammar Ziddan",
        "npm" => "230210200062",
        "jurusan" => "Kelautan",
        "email" => "ziddan@email.com"
    ],
    [
        "npm" => "230210200056",
        "nama" => "Raffy",
        "jurusan" => "Perikanan",
        "email" => "raffy@email.com"
    ]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs['nama'] ?>&npm=<?= $mhs['npm'] ?>&jurusan=<?= $mhs['jurusan'] ?>&email=<?= $mhs['email'] ?>">
                    <?= $mhs['nama'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>