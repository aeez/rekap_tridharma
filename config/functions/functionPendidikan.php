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
    $result = mysqli_query($conn, "SELECT * FROM tb_pendidikan WHERE id_pendidikan = '$id'");

    $row = mysqli_fetch_assoc($result);

    return $row;
}

function tambah($request)
{
    global $conn;

    $perguruan_tinggi = htmlspecialchars($request['perguruan_tinggi']);
    $bidang_ilmu = htmlspecialchars($request['bidang_ilmu']);
    $tahun_masuk = htmlspecialchars($request['tahun_masuk']);
    $tahun_lulus = htmlspecialchars($request['tahun_lulus']);
    $gelar_akademik = htmlspecialchars($request['gelar_akademik']);
    $jenjang = htmlspecialchars($request['jenjang']);
    $id_dosen = htmlspecialchars($request['id_dosen']);

    $query = "INSERT INTO tb_pendidikan VALUES
            (null,'$perguruan_tinggi','$bidang_ilmu','$tahun_masuk','$tahun_lulus','$gelar_akademik','$jenjang', '$id_dosen')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah($request)
{
    global $conn;

    $id_pendidikan = $request['id_pendidikan'];
    $perguruan_tinggi = htmlspecialchars($request['perguruan_tinggi']);
    $bidang_ilmu = htmlspecialchars($request['bidang_ilmu']);
    $tahun_masuk = htmlspecialchars($request['tahun_masuk']);
    $tahun_lulus = htmlspecialchars($request['tahun_lulus']);
    $gelar_akademik = htmlspecialchars($request['gelar_akademik']);
    $jenjang = htmlspecialchars($request['jenjang']);
    $id_dosen =htmlspecialchars($request['id_dosen']);

    $query = "UPDATE tb_pendidikan SET
            perguruan_tinggi = '$perguruan_tinggi',
            bidang_ilmu = '$bidang_ilmu',
            tahun_masuk = '$tahun_masuk',
            tahun_lulus = '$tahun_lulus',
            gelar_akademik = '$gelar_akademik',
            jenjang = '$jenjang',
            id_dosen = '$id_dosen'
            WHERE id_pendidikan = $id_pendidikan
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM tb_pendidikan WHERE id_pendidikan = $id");

    return mysqli_affected_rows($conn);
}

// function cari($keyword, $awalData, $jumlahDataPerhalaman)
// {

//     $query = "SELECT * FROM customer Where nama_lengkap LIKE '%$keyword%' OR nik LIKE '%$keyword%' OR email LIKE '%$keyword%' Limit $awalData,$jumlahDataPerhalaman";

//     return query($query);
// }
