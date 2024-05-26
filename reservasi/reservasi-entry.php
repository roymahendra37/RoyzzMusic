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
    <form class="halreservasi-entry" action="reservasi-proses.php" method="post" enctype="multipart/form-data">
        <div class="hreservasi-entry">
            <p>Tambah Data</p>
            <label>Nama</label>
            <input class="input" type="text" name="nama"/>
            <label>Jenis Paket</label>
            <input class="input" type="text" name="jenis"/>
            <label>Tanggal</label>
            <input class="input" type="date" name="tgl" id="tgl" style="margin-bottom: 20px" />
            <label>Jam</label>
            <input class="input" type="text" name="jam"/>
            <label>Durasi</label>
            <input class="input" type="text" name="durasi"/>
            <label class="input" for="photo">Bukti Pembayaran</label>
			<input class="input" type="file" name="bukti" id="bukti" style="margin-bottom: 20px" />
            <button class="btn-simpan" name="simpan">Simpan</button>
        </div> 
    </form>
</body>
</html>