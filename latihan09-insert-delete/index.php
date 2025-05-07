<?php

require 'functions.php';

$result = query("SELECT * FROM mahasiswa");

// mysqli_fetch_all($result, TIPE_ARRAY)
$mahasiswa = mysqli_fetch_all($result, MYSQLI_ASSOC);

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

    <a href="tambah.php">Tambah Data</a>
    <br><br>

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
        <?php $i = 1 ?>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><img src="img/<?= $mhs['gambar'] ?>" alt="" width="70"></td>
                <td><?= $mhs['nama'] ?></td>
                <td><?= $mhs['npm'] ?></td>
                <td><?= $mhs['jurusan'] ?></td>
                <td><?= $mhs['email'] ?></td>
                <!-- HAPUS DATA -->
                <td><a href="">Edit</a> | <a href="hapus.php?id=<?= $mhs['id'] ?>" onclick="return confirm('yakin?')">Hapus</a></td>
            </tr>
            <?php $i++ ?>
        <?php endforeach; ?>
    </table>

</body>

</html>