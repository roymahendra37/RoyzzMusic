<?php 
    session_start();
    if($_SESSION['username'] == null) {
        header('location:login.php');
    }
    include('koneksi.php');
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
    <style>
        .widget {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            width: 250px;
            padding: 20px;
            box-sizing: border-box;
            margin: 10px;
            text-align: center;
            font-family: 'League Spartan', sans-serif;
        }
        .widget a{
            text-decoration: none;
            font-size: 15px;
            color: black;
            background-color: gray;
            border-radius: 5px;
            padding: 5px;
        }
        .widget a:hover{
            text-decoration: none;
            font-size: 15px;
            color: white;
            background-color: #0069e1;
            border-radius: 5px;
            padding: 5px;
        }
        .widget-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        .widget h2 {
            font-size: 20px;
            margin-bottom: 10px;
        }
        .widget p {
            font-size: 30px;
            margin: 0;
        }
    </style>
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
        <div class="widget-container">
            <div class="widget">
                <h2>Total Reservasi</h2>
                <p><?php echo $totalReservasi; ?></p>
                <a href="reservasi/reservasi.php">View Details</a>
            </div>
            <div class="widget">
                <h2>Total Gear</h2>
                <p><?php echo $totalGear; ?></p>
                <a href="gear/gear.php">View Details</a>
            </div>
        </div>
    </div>
</body>
</html>
