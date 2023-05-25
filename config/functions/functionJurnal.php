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
    $result = mysqli_query($conn, "SELECT * FROM tb_jurnal WHERE id_jurnal = '$id'");

    $row = mysqli_fetch_assoc($result);

    return $row;
}

function tambah($request)
{
    global $conn;

    $judul = htmlspecialchars($request['judul']);
    $nama_jurnal = htmlspecialchars($request['nama_jurnal']);
    $volume = htmlspecialchars($request['volume']);
    $no = htmlspecialchars($request['no']);
    $tahun = htmlspecialchars($request['tahun']);
    $link_file = htmlspecialchars($request['link_file']);
    $id_dosen = htmlspecialchars($request['id_dosen']);

    $query = "INSERT INTO tb_jurnal VALUES
            (null,'$judul','$nama_jurnal','$volume','$no','$tahun','$link_file','$id_dosen')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah($request)
{
    global $conn;

    $id_jurnal = $request['id_jurnal'];
    $judul = htmlspecialchars($request['judul']);
    $nama_jurnal = htmlspecialchars($request['nama_jurnal']);
    $volume = htmlspecialchars($request['volume']);
    $no = htmlspecialchars($request['no']);
    $tahun = htmlspecialchars($request['tahun']);
    $link_file = htmlspecialchars($request['link_file']);
    $id_dosen =htmlspecialchars($request['id_dosen']);

    $query = "UPDATE tb_jurnal SET
            judul = '$judul',
            nama_jurnal = '$nama_jurnal',
            volume = '$volume',
            no = '$no',
            tahun = '$tahun',
            link_file = '$link_file',
            id_dosen = '$id_dosen'
            WHERE id_jurnal = $id_jurnal
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM tb_jurnal WHERE id_jurnal = $id");

    return mysqli_affected_rows($conn);
}

// function cari($keyword, $awalData, $jumlahDataPerhalaman)
// {

//     $query = "SELECT * FROM customer Where nama_lengkap LIKE '%$keyword%' OR nik LIKE '%$keyword%' OR email LIKE '%$keyword%' Limit $awalData,$jumlahDataPerhalaman";

//     return query($query);
// }
