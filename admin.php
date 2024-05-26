<?php 
	session_start();
	if($_SESSION['username'] == null) {
		header('location:login.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="assets/icon.png" />
    <link rel="stylesheet" href="css/admin.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
    <title>Royzz Music Admin - Dashboard</title>
</head>
<body background="assets/background.jpg" style="background-size: 100%;">
    <div class="navcontainer">
        <nav class="wrapper">
            <div class="brand">
                <div class="name">Royzz Music (Admin) </div>
            </div>
            <ul class="navigation">
                <li><a href="admin.php">Dashboard</a></li>
                <li><a href="gear/gear.php">Gear</a></li>
                <li><a href="reservasi/reservasi.php">Reservasi</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </div>
    <div class="das-content">
        <h1>Selamat Datang 
            <?php
                echo $_SESSION['username'];
            ?>
        </h1>
        <center>
            <img src="assets/logo.png" style="width: 600px;"/>
        </center>
    </div>
</body>
</html>