<?php 
if(isset($_POST['simpan'])) {
    $jenis = $_POST['jenis'];
    $tipe = $_POST['tipe'];
    $merk = $_POST['merk'];
    $harga = $_POST['harga'];

    echo
    'jenis : ' . $jenis .
    '<br>tipe : ' . $tipe . 
    '<br>merk : ' . $merk .
    '<br>harga : ' .$harga;
}
?>