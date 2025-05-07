<?php

// koneksi ke database -> msql, mysqli, PDO
$conn = mysqli_connect("localhost", "root", "", "php-dasar");

// ambil data dari tabel mahasiswa / query
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// var_dump($result);
// if (!$result) {
//     echo mysqli_error($conn);
// }

// ambil data (fetch) mahasiswa dari objek result
// mysqli_fetch_row() -> mengembalikan array numerik
// mysqli_fetch_assoc() -> mengembalikan array associative
// mysqli_fetch_array() -> mengembalikan array numerik & assoc

// $mahasiswa = mysqli_fetch_assoc($result);
// var_dump($mahasiswa);

// while ($mahasiswa = mysqli_fetch_assoc($result)) {
//     var_dump($mahasiswa);
// }

// mysqli_fetch_all($result, TIPE_ARRAY)
$mahasiswa = mysqli_fetch_all($result, MYSQLI_ASSOC);
// var_dump($mahasiswa);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>

    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td>1</td>
                <td><img src="img/<?= $mhs['gambar'] ?>" alt="" width="70"></td>
                <td><?= $mhs['nama'] ?></td>
                <td><?= $mhs['npm'] ?></td>
                <td><?= $mhs['jurusan'] ?></td>
                <td><?= $mhs['email'] ?></td>
                <td><a href="">Edit</a> | <a href="">Hapus</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>