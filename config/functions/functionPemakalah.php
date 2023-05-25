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
    $result = mysqli_query($conn, "SELECT * FROM tb_pemakalah WHERE id_pemakalah = '$id'");

    $row = mysqli_fetch_assoc($result);

    return $row;
}

function tambah($request)
{
    global $conn;

    $nama_seminar = htmlspecialchars($request['nama_seminar']);
    $judul_artikel_ilmiah = htmlspecialchars($request['judul_artikel_ilmiah']);
    $waktu = htmlspecialchars($request['waktu']);
    $tempat = htmlspecialchars($request['tempat']);
    $link_file = htmlspecialchars($request['link_file']);
    $id_dosen = htmlspecialchars($request['id_dosen']);

    $query = "INSERT INTO tb_pemakalah VALUES
            (null,'$nama_seminar','$judul_artikel_ilmiah','$waktu','$tempat','$link_file','$id_dosen')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah($request)
{
    global $conn;

    $id_pemakalah = $request['id_pemakalah'];
    $nama_seminar = htmlspecialchars($request['nama_seminar']);
    $judul_artikel_ilmiah = htmlspecialchars($request['judul_artikel_ilmiah']);
    $waktu = htmlspecialchars($request['waktu']);
    $tempat = htmlspecialchars($request['tempat']);
    $link_file = htmlspecialchars($request['link_file']);
    $id_dosen =htmlspecialchars($request['id_dosen']);

    $query = "UPDATE tb_pemakalah SET
            nama_seminar = '$nama_seminar',
            judul_artikel_ilmiah = '$judul_artikel_ilmiah',
            waktu = '$waktu',
            tempat = '$tempat',
            link_file = '$link_file',
            id_dosen = '$id_dosen'
            WHERE id_pemakalah = $id_pemakalah
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM tb_pemakalah WHERE id_pemakalah = $id");

    return mysqli_affected_rows($conn);
}

// function cari($keyword, $awalData, $jumlahDataPerhalaman)
// {

//     $query = "SELECT * FROM customer Where nama_lengkap LIKE '%$keyword%' OR nik LIKE '%$keyword%' OR email LIKE '%$keyword%' Limit $awalData,$jumlahDataPerhalaman";

//     return query($query);
// }
