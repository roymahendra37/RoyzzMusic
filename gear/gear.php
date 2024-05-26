<?php
session_start();
if ($_SESSION['username'] == null) {
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
					<?php
					include '../koneksi.php';
					$sql = "SELECT * FROM tb_gear";
					$result = mysqli_query($koneksi, $sql);
					if (mysqli_num_rows($result) == 0) {
						echo "
			   <tr>
				<td colspan='5' align='center'>
                           Data Kosong
                        </td>
			   </tr>
				";
					}
					while ($data = mysqli_fetch_assoc($result)) {
						echo "
                    <tr>
                      <td>$data[jenis]</td>
					  <td>$data[tipe]</td>
                      <td>$data[merk]</td>
					  <td>$data[harga]</td>
                      <td >
                        <a class='btn-edit'
						style='background-color: #0c58ca;
						color: white;
						padding: 5px 16px;
						margin-right: 8px;
						border: none;
						border-radius: 4px;
						cursor: pointer;
						font-size: 14px;
						transition: background-color 0.3s;
						text-decoration: none;'
						href=gear-edit.php?id_gear=$data[id_gear]>
                               Edit
                        </a> | 
                        <a class='btn-hapus'
						style='background-color: #f44336;
						color: white;
						padding: 5px 16px;
						margin-right: 8px;
						border: none;
						border-radius: 4px;
						cursor: pointer;
						font-size: 14px;
						transition: background-color 0.3s;
						text-decoration: none;'
						href=gear-hapus.php?id_gear=$data[id_gear]>
                            Hapus
                        </a>
                      </td>
                    </tr>
                  ";
					}
					?>
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