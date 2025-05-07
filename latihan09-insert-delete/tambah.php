<?php

require 'functions.php';

if (isset($_POST['submit'])) {
    // var_dump($_POST);

    // pindahkan logika tambah ke functions.php

    if (tambah($_POST)) {
        echo "
            <script>
            alert('Berhasil menambahkan data');
            document.location.href = 'index.php'
            </script>
            
        ";
    } else {
        echo "
            <script>
            alert('Gagal menambahkan data');
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
    <title>Tambah Data</title>
</head>

<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="npm">NPM : </label>
                <input type="text" name="npm" id="npm">
            </li>
            <li>
                <label for="email">email : </label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>

</html>