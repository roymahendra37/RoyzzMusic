<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="../assets/icon.png" />
    <link rel="stylesheet" href="../css/admin.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
    <title>Royzz Music Admin - Reservasi</title>
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
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="gear-content">
		<h3>Reservasi</h3>
		<button type="button" class="btn btn-tambah">
		   <a href="../reservasi/reservasi-entry.php">Tambah Data</a>
		</button>
		<table class="table-data">
		   <thead>
			<tr>
			  <th>Nama</th>
			  <th>Jenis Paket</th>
			  <th>Tanggal</th>
			  <th>Jam</th>
              <th>Durasi</th>
			  <th>Bukti Pembayaran</th>
              <th>Pilih</th>
			</tr>
		   </thead>
		   <tbody>
			<tr>
			   <td>Roy Mahendra</td>
			   <td>Paket 2</td>
               <td>12-04-2024</td>
			   <td>18.00 WIB</td>
               <td>2 Jam</td>
               <td><img src="bukti.jpg"/></td>
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