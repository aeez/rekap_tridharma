<?php
include('../config/functions/functionJurnal.php');

$id = $_GET['id_jurnal'];

if (hapus($id) > 0) {
    echo "
    <script>
        alert('Data berhasil dihapus!');
        document.location.href = 'luaran_tbl.php';
    </script>
";
} else {
    echo "
    <script>
        alert('Data gagal dihapus!');
        document.location.href = 'jurnal_detail.php';
    </script>
";
}
