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
    $result = mysqli_query($conn, "SELECT * FROM tb_dosen WHERE id_dosen = '$id'");

    $row = mysqli_fetch_assoc($result);

    return $row;
}

function tambah($request)
{
    global $conn;

    $nama = htmlspecialchars($request['nama']);
    $tempat_lahir = htmlspecialchars($request['tempat_lahir']);
    $tgl_lahir = htmlspecialchars($request['tgl_lahir']);
    $jenis_kelamin = htmlspecialchars($request['jenis_kelamin']);
    $jabatan_fungsional = htmlspecialchars($request['jabatan_fungsional']);
    $nip = htmlspecialchars($request['nip']);
    $nidn = htmlspecialchars($request['nidn']);
    $alamat_email = htmlspecialchars($request['alamat_email']);
    $no_hp = htmlspecialchars($request['no_hp']);
    $alamat_kantor = htmlspecialchars($request['alamat_kantor']);
    $lulusan = htmlspecialchars($request['lulusan']);
    $password = password_hash($request['nidn'], PASSWORD_DEFAULT);
    $level = 'dosen';

    $query = "INSERT INTO tb_dosen VALUES
            ('','$nama','$tempat_lahir','$tgl_lahir','$jenis_kelamin','$jabatan_fungsional','$nip','$nidn','$alamat_email','$no_hp','$alamat_kantor','$lulusan','$password', '$level')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah($request)
{
    global $conn;

    $id_dosen = $request['id_dosen'];
    $nama = htmlspecialchars($request['nama']);
    $tempat_lahir = htmlspecialchars($request['tempat_lahir']);
    $tgl_lahir = htmlspecialchars($request['tgl_lahir']);
    $jenis_kelamin = htmlspecialchars($request['jenis_kelamin']);
    $jabatan_fungsional = htmlspecialchars($request['jabatan_fungsional']);
    $nip = htmlspecialchars($request['nip']);
    $nidn = htmlspecialchars($request['nidn']);
    $alamat_email = htmlspecialchars($request['alamat_email']);
    $no_hp = htmlspecialchars($request['no_hp']);
    $alamat_kantor = htmlspecialchars($request['alamat_kantor']);
    $lulusan = htmlspecialchars($request['lulusan']);
    $password = password_hash($request['nidn'], PASSWORD_DEFAULT);
    $level = 'dosen';

    $query = "UPDATE customer SET
            nama = '$nama',
            tempat_lahir = '$tempat_lahir',
            tgl_lahir = '$tgl_lahir',
            jenis_kelamin = '$jenis_kelamin',
            jabatan_fungsional = '$jabatan_fungsional',
            nip = '$nip',
            nidn = '$nidn',
            alamat_email = '$alamat_email',
            no_hp = '$no_hp',
            alamat_kantor = '$alamat_kantor',
            lulusan = '$lulusan',
            password = '$password',
            level = '$level',
            WHERE id_dosen = $id_dosen
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM tb_dosen WHERE id_dosen = $id");

    return mysqli_affected_rows($conn);
}

// function cari($keyword, $awalData, $jumlahDataPerhalaman)
// {

//     $query = "SELECT * FROM customer Where nama_lengkap LIKE '%$keyword%' OR nik LIKE '%$keyword%' OR email LIKE '%$keyword%' Limit $awalData,$jumlahDataPerhalaman";

//     return query($query);
// }
