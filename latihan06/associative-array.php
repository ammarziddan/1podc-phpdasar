<?php

// $mahasiswa = [
//     [
//         "Ammar Ziddan",
//         "230210200062",
//         "Kelautan",
//         "ziddan@email.com"
//     ],
//     [
//         "230210200080",
//         "Raffy",
//         "Kelautan",
//         "raffy@email.com"
//     ],
// ];

// Array associative -> key: string yang kita buat sendiri
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

// echo $mahasiswa["jurusan"];
echo $mahasiswa[1]["jurusan"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <!-- <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?php echo $mhs[0]; ?></li>
            <li>NPM : <?php echo $mhs[1]; ?></li>
            <li>Jurusan : <?php echo $mhs[2]; ?></li>
            <li>email : <?php echo $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?> -->

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?php echo $mhs["nama"]; ?></li>
            <li>NPM : <?php echo $mhs["npm"]; ?></li>
            <li>Jurusan : <?php echo $mhs["jurusan"]; ?></li>
            <li>email : <?php echo $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>


</body>

</html>