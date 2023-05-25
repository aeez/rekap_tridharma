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
    $result = mysqli_query($conn, "SELECT * FROM tb_hki WHERE id_hki = '$id'");

    $row = mysqli_fetch_assoc($result);

    return $row;
}

function tambah($request)
{
    global $conn;

    $judul_hki = htmlspecialchars($request['judul_hki']);
    $tahun = htmlspecialchars($request['tahun']);
    $tempat_penerapan = htmlspecialchars($request['tempat_penerapan']);
    $respon_masyarakat = htmlspecialchars($request['respon_masyarakat']);
    $link_file = htmlspecialchars($request['link_file']);
    $id_dosen = htmlspecialchars($request['id_dosen']);

    $query = "INSERT INTO tb_hki VALUES
            (null,'$judul_hki','$tahun','$tempat_penerapan','$respon_masyarakat','$link_file','$id_dosen')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah($request)
{
    global $conn;

    $id_hki = $request['id_hki'];
    $judul_hki = htmlspecialchars($request['judul_hki']);
    $tahun = htmlspecialchars($request['tahun']);
    $tempat_penerapan = htmlspecialchars($request['tempat_penerapan']);
    $respon_masyarakat = htmlspecialchars($request['respon_masyarakat']);
    $link_file = htmlspecialchars($request['link_file']);
    $id_dosen =htmlspecialchars($request['id_dosen']);

    $query = "UPDATE tb_hki SET
            judul_hki = '$judul_hki',
            tahun = '$tahun',
            tempat_penerapan = '$tempat_penerapan',
            respon_masyarakat = '$respon_masyarakat',
            link_file = '$link_file',
            id_dosen = '$id_dosen'
            WHERE id_hki = $id_hki
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM tb_hki WHERE id_hki = $id");

    return mysqli_affected_rows($conn);
}

// function cari($keyword, $awalData, $jumlahDataPerhalaman)
// {

//     $query = "SELECT * FROM customer Where nama_lengkap LIKE '%$keyword%' OR nik LIKE '%$keyword%' OR email LIKE '%$keyword%' Limit $awalData,$jumlahDataPerhalaman";

//     return query($query);
// }
