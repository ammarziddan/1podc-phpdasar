<?php

if (
    empty($_GET['nama']) ||
    empty($_GET['npm']) ||
    empty($_GET['jurusan']) ||
    empty($_GET['email'])
) {
    // redirect
    header("Location: latihan1.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>

<body>
    <ul>
        <li>Nama : <?= $_GET['nama']; ?></li>
        <li>NPM : <?= $_GET['npm']; ?></li>
        <li>Jurusan : <?= $_GET['jurusan']; ?></li>
        <li>Email : <?= $_GET['email']; ?></li>
    </ul>

    <a href="latihan1.php">kembali</a>
</body>

</html>