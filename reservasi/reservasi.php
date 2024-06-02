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
        <form action="reservasi-cetak.php">
		 <input class="btn" type="submit" value="Cetak" style="margin: 10px; margin-left: 0px;">
		 </form>  
		<table class="table-data">
		   <thead>
			<tr>
			  <th>Tanggal</th>
			  <th>Jam</th>
			  <th>Nama</th>
			  <th>Jenis Paket</th>
              <th>Durasi</th>
              <th>Total Harga</th>
			</tr>
		   </thead>
		   <tbody>
           <?php
               include '../koneksi.php';
               $sql = "SELECT * FROM tb_reservasi";
               $result = mysqli_query($koneksi, $sql);
               if (mysqli_num_rows($result) == 0) {
                  echo "
                  <h3 style='text-align: center; color: red;'>Data Kosong</h3>
               ";
               } else {
                  while ($data = mysqli_fetch_assoc($result)) {
                     echo "
                     <tr>
                         <td>$data[tanggal]</td>
                         <td>$data[jam]</td>
                         <td>$data[nama]</td>
                         <td>$data[paket]</td>
                         <td>$data[durasi] Jam</td>
                         <td>Rp. $data[total]</td>
                     </tr>
                     ";
                  }
               }
               ?>
		   </tbody>
		</table>
	   </div>
       <script>
            function hapus(){
                confirm('Apakah Ingin Menghapus Data?');
            };
       </script>
</body>
</html>