<?php 
if(isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $tanggal = $_POST['tgl'];
    $jam = $_POST['jam'];
    $durasi = $_POST['durasi'];
    $image = $_FILES['bukti']['name'];

    echo
    'nama : ' . $nama .
    '<br>jenis paket : ' . $jenis .
    '<br>tanggal : ' . $tanggal . 
    '<br>jam : ' . $jam .
    '<br>durasi : ' . $durasi .
    '<br>bukti : ' . $image;
}
?>