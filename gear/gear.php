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
                </ul>
            </nav>
        </div>
    </div>
    <div class="gear-content">
		<h3>Gear</h3>
		<button type="button" class="btn btn-tambah">
		   <a href="../gear/gear-entry.php">Tambah Data</a>
		</button>
		<table class="table-data">
		   <thead>
			<tr>
			  <th style="width: 20%;">Jenis Gear</th>
			  <th style="width: 20%;">Tipe</th>
			  <th style="width: 20%;">Merk</th>
			  <th>Harga</th>
			  <th style="width: 20%;">Pilih</th>
			</tr>
		   </thead>
		   <tbody>
			<tr>
			   <td>Gitar Elektrik</td>
			   <td>GX100</td>
			   <td>Cort</td>
			   <td>2.000.000</td>
			   <td><a href="">Edit</a> | <a href="" onclick="hapus()">Hapus</a></td>
			</tr>
		   </tbody>
		</table>
	   </div>
	   <script>
		function hapus(){
			confirm('Apakah Anda Ingin Menghapus?');
		};
   </script>
</body>
</html>