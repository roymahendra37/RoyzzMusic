<?php
include '../koneksi.php';

if (isset($_POST['reservasi'])) {
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];
    $durasi = $_POST['durasi'];
    $nama = $_POST['nama'];
    $paket = $_POST['paket'];
    if ($paket == 'Paket 1'){
        $total = 25000*$durasi;
    } elseif ($paket == 'Paket 2'){
        $total = 35000*$durasi;
    } else{
        $total = 50000*$durasi;
    }

    $sql = "INSERT INTO tb_reservasi VALUES(null, '$tanggal','$jam','$durasi', '$nama', '$paket', $total )";

    if (empty($tanggal) || empty($jam) || empty($durasi) ||  empty($nama)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = '../index.php';
            </script>
        ";
    } elseif (mysqli_query($koneksi, $sql)) {
        echo "  
            <script>
                alert('Reservasi Berhasil');
                window.location = '../index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = '../index.php';
            </script>
        ";
    }
} else {
    header('location: ../index.php');
}
