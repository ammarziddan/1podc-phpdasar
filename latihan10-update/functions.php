<?php
// koneksi ke database -> msql, mysqli, PDO
$conn = mysqli_connect("localhost", "root", "", "php-dasar");

function query($query)
{
    global $conn;
    return mysqli_query($conn, $query);
}

function tambah($data)
{
    // ambil data dari tiap elemen form
    // $nama = $data['nama'];
    // $npm = $data['npm'];
    // $email = $data['email'];
    // $jurusan = $data['jurusan'];
    // $gambar = $data['gambar'];
    $nama = htmlspecialchars($data['nama']);
    $npm = htmlspecialchars($data['npm']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $gambar = htmlspecialchars($data['gambar']);


    // query insert data
    $query = "INSERT INTO mahasiswa
                VALUES
                ('', '$nama', '$npm', '$email', '$jurusan', '$gambar')
            ";

    // $hasil = query($query);
    // var_dump($hasil);

    return query($query);
}

function hapus($id)
{
    return query("DELETE FROM mahasiswa WHERE id = $id");
}

function edit($id, $data)
{
    // ambil data $_POST
    $nama = htmlspecialchars($data['nama']);
    $npm = htmlspecialchars($data['npm']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $gambar = htmlspecialchars($data['gambar']);

    // query edit data
    $query = "UPDATE mahasiswa SET
                nama = '$nama', 
                npm = '$npm', 
                email = '$email', 
                jurusan = '$jurusan', 
                gambar = '$gambar'
              WHERE id = $id
            ";

    return query($query);
}
