<?php 
include '../koneksi.php';
if(isset($_POST['simpan'])) {
    $jenis = $_POST['jenis'];
    $tipe = $_POST['tipe'];
    $merk = $_POST['merk'];
    $harga = $_POST['harga'];

    $sql = "INSERT INTO tb_gear VALUES(NULL, '$jenis', '$tipe', '$merk','$harga')";

    if(empty($jenis) || empty($tipe)|| empty($merk)|| empty($harga)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'gear-entry.php';
            </script>
        ";
    }elseif(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Gear Berhasil Ditambahkan');
                window.location = 'gear.php'
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'gear-entry.php'
            </script>
        ";
    }
}elseif(isset($_POST['edit'])) {
    $id = $_POST['id_gear'];
    $jenis = $_POST['jenis'];
    $tipe = $_POST['tipe'];
    $merk = $_POST['merk'];
    $harga = $_POST['harga'];

    $sql = "UPDATE tb_gear SET 
            jenis= '$jenis',
            tipe = '$tipe',
            merk = '$merk'
            harga = '$harga'
            WHERE id_gear = $id 
            ";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Gear Berhasil Diubah');
                window.location = 'gear.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'gear-edit.php';
            </script>
        ";
    }
    
}elseif(isset($_POST['hapus'])) {
    $id = $_POST['id_gear'];

    $sql = "DELETE FROM tb_gear WHERE id_gear = $id";
    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Gear Berhasil Dihapus');
                window.location = 'gear.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Data Gear Gagal Dihapus');
                window.location = 'gear.php';
            </script>
        ";
    }
}else {
    header('location: gear.php');
}