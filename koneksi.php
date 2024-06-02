<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'royzzmusic';

// Membuat koneksi
$koneksi = mysqli_connect($servername, $username, $password, $database);

// Mengecek koneksi
if(!$koneksi) {
    die('Connection Failed:' . mysqli_connect_error());
}

// Query untuk menghitung total reservasi
$reservasiQuery = "SELECT COUNT(*) as total_reservasi FROM tb_reservasi";
$reservasiResult = mysqli_query($koneksi, $reservasiQuery);
$reservasiData = mysqli_fetch_assoc($reservasiResult);
$totalReservasi = $reservasiData['total_reservasi'];

// Query untuk menghitung total gear
$gearQuery = "SELECT COUNT(*) as total_gear FROM tb_gear";
$gearResult = mysqli_query($koneksi, $gearQuery);
$gearData = mysqli_fetch_assoc($gearResult);
$totalGear = $gearData['total_gear'];
?>
