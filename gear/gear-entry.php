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
    <form class="halreservasi-entry" action="gear-proses.php" method="post" enctype="multipart/form-data">
        <div class="hreservasi-entry">
            <p>Tambah Data</p>
            <label>Jenis Gear</label>
            <input class="input" type="text" name="jenis"/>
            <label>Tipe</label>
            <input class="input" type="text" name="tipe"/>
            <label>Merk</label>
            <input class="input" type="text" name="merk"/>
            <label>Harga</label>
            <input class="input" type="text" name="harga"/>
            <button class="btn-simpan" name="simpan">Simpan</button>
        </div> 
    </form>
</body>
</html>