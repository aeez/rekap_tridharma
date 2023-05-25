<?php
include('../config/conn.php');

if (!isset($_SESSION['login'])) {
    header('location:login.php');
}

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] =  $row;
    }

    return $rows;
}

function detail($id)
{

    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM tb_buku WHERE id_buku = '$id'");

    $row = mysqli_fetch_assoc($result);

    return $row;
}

function tambah($request)
{
    global $conn;

    $judul_buku = htmlspecialchars($request['judul_buku']);
    $tahun = htmlspecialchars($request['tahun']);
    $jumlah_halaman = htmlspecialchars($request['jumlah_halaman']);
    $penerbit = htmlspecialchars($request['penerbit']);
    $link_file = htmlspecialchars($request['link_file']);
    $id_dosen = htmlspecialchars($request['id_dosen']);

    $query = "INSERT INTO tb_buku VALUES
            (null,'$judul_buku','$tahun','$jumlah_halaman','$penerbit','$link_file','$id_dosen')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah($request)
{
    global $conn;

    $id_buku = $request['id_buku'];
    $judul_buku = htmlspecialchars($request['judul_buku']);
    $tahun = htmlspecialchars($request['tahun']);
    $jumlah_halaman = htmlspecialchars($request['jumlah_halaman']);
    $penerbit = htmlspecialchars($request['penerbit']);
    $link_file = htmlspecialchars($request['link_file']);
    $id_dosen =htmlspecialchars($request['id_dosen']);

    $query = "UPDATE tb_buku SET
            judul_buku = '$judul_buku',
            tahun = '$tahun',
            jumlah_halaman = '$jumlah_halaman',
            penerbit = '$penerbit',
            link_file = '$link_file',
            id_dosen = '$id_dosen'
            WHERE id_buku = $id_buku
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM tb_buku WHERE id_buku = $id");

    return mysqli_affected_rows($conn);
}

// function cari($keyword, $awalData, $jumlahDataPerhalaman)
// {

//     $query = "SELECT * FROM customer Where nama_lengkap LIKE '%$keyword%' OR nik LIKE '%$keyword%' OR email LIKE '%$keyword%' Limit $awalData,$jumlahDataPerhalaman";

//     return query($query);
// }
