<?php
  include '../koneksi.php';
  $id = $_GET['id_gear'];
  if(!isset($_GET['id_gear'])) {
    echo "
      <script>
        alert('Tidak ada ID yang Terdeteksi');
        window.location = 'gear.php';
      </script>
    ";
  }

  $sql = "SELECT * FROM tb_gear WHERE id_gear = '$id'";
  $result = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_assoc($result);

	session_start();
	if($_SESSION['username'] == null) {
		header('location:../login.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="../assets/icon.png" />
    <link rel="stylesheet" href="../css/admin.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
    <title>Royzz Music Admin - Gear</title>
</head>
<body>
    <div class="fcontainer">
        <div class="navcontainer">
            <nav class="wrapper">
                <div class="brand">
                    <div class="name">Royzz Music (Admin) </div>
                </div>
                <ul class="navigation">
                    <li><a href="../admin.php">Dashboard</a></li>
                    <li><a href="../gear/gear.php">Gear</a></li>
                    <li><a href="../reservasi/reservasi.php">Reservasi</a></li>
                    <li><a href="../logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <form class="halreservasi-entry" action="gear-proses.php" method="post" enctype="multipart/form-data">
        <div class="hreservasi-entry">
            <p>Edit Data</p>
            <label>Jenis Gear</label>
            <input class="input" type="text" name="jenis" id="jenis" value="<?= $data['jenis'] ?>"/>
            <label>Tipe</label>
            <input class="input" type="text" name="tipe" id="tipe" value="<?= $data['tipe'] ?>"/>
            <label>Merk</label>
            <input class="input" type="text" name="merk" id="merk" value="<?= $data['merk'] ?>"/>
            <label>Harga</label>
            <input class="input" type="text" name="harga" id="harga" value="<?= $data['harga'] ?>"/>
            <button class="btn-simpan" name="simpan">Edit</button>
        </div> 
    </form>
</body>
</html>