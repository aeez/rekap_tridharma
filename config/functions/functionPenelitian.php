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
    $result = mysqli_query($conn, "SELECT * FROM tb_penelitian WHERE id_penelitian = '$id'");

    $row = mysqli_fetch_assoc($result);

    return $row;
}

function tambah($request)
{
    global $conn;

    $judul_penelitian = htmlspecialchars($request['judul_penelitian']);
    $tahun = htmlspecialchars($request['tahun']);
    $sumber_dana = htmlspecialchars($request['sumber_dana']);
    $nominal_dana = htmlspecialchars($request['nominal_dana']);
    $link_file = htmlspecialchars($request['link_file']);
    $id_dosen = htmlspecialchars($request['id_dosen']);

    $query = "INSERT INTO tb_penelitian VALUES
            (null,'$judul_penelitian','$tahun','$sumber_dana','$nominal_dana','$link_file','$id_dosen')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah($request)
{
    global $conn;

    $id_penelitian = $request['id_penelitian'];
    $judul_penelitian = htmlspecialchars($request['judul_penelitian']);
    $tahun = htmlspecialchars($request['tahun']);
    $sumber_dana = htmlspecialchars($request['sumber_dana']);
    $nominal_dana = htmlspecialchars($request['nominal_dana']);
    $link_file = htmlspecialchars($request['link_file']);
    $id_dosen =htmlspecialchars($request['id_dosen']);

    $query = "UPDATE tb_penelitian SET
            judul_penelitian = '$judul_penelitian',
            tahun = '$tahun',
            sumber_dana = '$sumber_dana',
            nominal_dana = '$nominal_dana',
            link_file = '$link_file',
            id_dosen = '$id_dosen'
            WHERE id_penelitian = $id_penelitian
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM tb_penelitian WHERE id_penelitian = $id");

    return mysqli_affected_rows($conn);
}

// function cari($keyword, $awalData, $jumlahDataPerhalaman)
// {

//     $query = "SELECT * FROM customer Where nama_lengkap LIKE '%$keyword%' OR nik LIKE '%$keyword%' OR email LIKE '%$keyword%' Limit $awalData,$jumlahDataPerhalaman";

//     return query($query);
// }
