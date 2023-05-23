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
    $email = htmlspecialchars($request['email']);
    $no_hp = htmlspecialchars($request['no_hp']);
    $alamat_kantor = htmlspecialchars($request['alamat_kantor']);
    $lulusan = htmlspecialchars($request['lulusan']);
    $password = password_hash($request['nidn'], PASSWORD_DEFAULT);
    $level = 'dosen';

    $gambar = upload();

    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO tb_dosen VALUES
            (null,'$gambar','$nama','$tempat_lahir','$tgl_lahir','$jenis_kelamin','$jabatan_fungsional','$nip','$nidn', '$email', '$no_hp', '$alamat_kantor', '$lulusan','$password', '$level')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if ($error === 4) {
        echo "<script>
                alert('Silahkan Upload Gambar!');
            </script>";
        return false;
    }

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
                alert('Ekstensi gambar harus jpg/jpeg/png');
            </script>";
        return false;
    }


    if ($ukuranFile > 5000000) {
        echo "<script>
                alert('Ukuran file gambar terlalu besar!');
            </script>";
        return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, '../app/img/' . $namaFileBaru);

    return $namaFileBaru;
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
    $email = htmlspecialchars($request['email']);
    $no_hp = htmlspecialchars($request['no_hp']);
    $alamat_kantor = htmlspecialchars($request['alamat_kantor']);
    $lulusan = htmlspecialchars($request['lulusan']);
    $password = password_hash($request['nidn'], PASSWORD_DEFAULT);
    $gambarLama = htmlspecialchars($request['gambarLama']);
    $level = 'dosen';

    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE tb_dosen SET
            gambar = '$gambar',
            nama = '$nama',
            tempat_lahir = '$tempat_lahir',
            tgl_lahir = '$tgl_lahir',
            jenis_kelamin = '$jenis_kelamin',
            jabatan_fungsional = '$jabatan_fungsional',
            nip = '$nip',
            nidn = '$nidn',
            email = '$email',
            no_hp = '$no_hp',
            alamat_kantor = '$alamat_kantor',
            lulusan = '$lulusan',
            password = '$password',
            level = '$level'
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
