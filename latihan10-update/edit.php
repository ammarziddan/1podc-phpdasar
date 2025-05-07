<?php

require 'functions.php';

// ambil data di url
$id = $_GET['id'];
// var_dump($id);

// query data mahasiswa berdasarkan id
$result = query("SELECT * FROM mahasiswa WHERE id = $id");
$mhs = mysqli_fetch_assoc($result);
// var_dump($mhs);

if (isset($_POST['submit'])) {
    // var_dump($_POST);

    if (edit($id, $_POST)) {
        echo "
            <script>
            alert('Berhasil mengedit data');
            document.location.href = 'index.php'
            </script>
            
        ";
    } else {
        echo "
            <script>
            alert('Gagal mengedit data');
            document.location.href = 'tambah.php'
            </script>
            
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>

<body>
    <h1>Edit Data Mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" value="<?= $mhs['nama'] ?>">
            </li>
            <li>
                <label for="npm">NPM : </label>
                <input type="text" name="npm" id="npm" value="<?= $mhs['npm'] ?>">
            </li>
            <li>
                <label for="email">email : </label>
                <input type="text" name="email" id="email" value="<?= $mhs['email'] ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $mhs['jurusan'] ?>">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar" value="<?= $mhs['gambar'] ?>">
            </li>
            <li>
                <button type="submit" name="submit">Edit Data</button>
            </li>
        </ul>
    </form>
</body>

</html>