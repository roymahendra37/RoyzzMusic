<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="assets/icon.png" />
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
    <title>Royzz Music - Home</title>
    <style>
        .navcontainer {
            position: relative;
            z-index: 10;
        }

        body {
            margin: 0;
            padding: 0;
        }

        .bodycontainer {
            position: relative;
            z-index: 1;
        }

        .slide img {
            width: 100%;
            height: auto;
        }

        /* Modal CSS */
        .modal {
            display: none;
            position: fixed; 
            z-index: 1000; 
            left: 0;
            top: 0;
            width: 100%; 
            height: 100%; 
            overflow: auto; 
            background-color: rgb(0,0,0); 
            background-color: rgba(0,0,0,0.4); 
        }

        .modal-content {
            background-color: rgb(255,255,255);
            margin: 15% auto; 
            padding: 20px;
            border: 2px solid;
            border-radius: 15px;
            width: 20%; 
        }

        .modal-content input{
            padding: 5px;
            border-radius: 7px;
            border: 1px solid grey;
            background-color: rgba(255, 255, 255, 0.733);
        }

        .modal-content label{
            font-weight: 400px;
        }

        #btn-reservasi {
            background-color: #0069e1;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .paket {
            display: flex;
            justify-content: space-evenly;
            gap: 20px;
            color: white;
        }

        .paket div {
            border: 1px solid #000;
            padding: 20px;
            cursor: pointer;
        }
    </style>
</head> 
<body background="assets/background.jpg">
    <div class="navcontainer">
        <nav class="wrapper">
            <div class="brand">
                <div class="name">Royzz Music</div>
            </div>
            <ul class="navigation">
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
        </nav>
    </div>
    <div class="bodycontainer">
        <center>
            <div class="logo">
                <div class="gambar"><img src="assets/logo.png"></div>
            </div>
            <div class="slides">
                <div class="slide">
                    <img src="assets/1.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="assets/2.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="assets/3.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="assets/4.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="assets/5.jpg" alt="">
                </div>
                <div class="navigation">
                    <a class="prev" onclick="plusSlides(-1)">&#10094</a>
                    <a class="next" onclick="plusSlides(1)">&#10095</a>
                </div>
            </div>
        <h2>
            Reservasi Studio Musik Terbaik Dan Terlengkap<br/>
        </h2>
        <h3>
            Silahkan Pilih Paket!
        </h3>
        <div class="paket">
            <div class="paket1" data-paket="Paket 1">
                Paket 1<br/><br/>
                Gitar (Rhythm)<br/>
                Gitar (Lead)<br/>
                Bass<br/>
                Drum<br/><br/>
                Rp 25.000/Jam<br/>
            </div>
            <div class="paket2" data-paket="Paket 2">
                Paket 2<br/><br/>
                Gitar (Rhythm)<br/>
                Gitar (Lead)<br/>
                Piano <br/>
                Bass<br/>
                Drum<br/><br/>
                Rp 35.000/Jam<br/>
            </div>
            <div class="paket3" data-paket="Paket 3">
                Paket 3<br/><br/>
                Gitar (Rhythm)<br/>
                Gitar (Lead)<br/>
                Piano <br/>
                MIDI <br/>
                Bass<br/>
                Drum<br/><br/>
                Rp 50.000/Jam<br/>
            </div>
        </div>
    </center>
    </div>

    <!-- Modal HTML -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <form id="reservationForm" action="reservasi/reservasi-proses.php" method="post">
                <label for="jenis_paket">Paket yang dipilih </label></br>
                <input type="text" id="jenis_paket" name="paket" readonly><br><br>
                <label for="nama">Nama </label></br>
                <input type="text" id="nama" name="nama" placeholder="Nama" required><br><br>
                <label for="tanggal">Tanggal </label></br>
                <input type="date" id="tanggal" name="tanggal" required><br><br>
                <label for="jam">Jam </label></br>
                <input type="time" id="jam" name="jam"  required><br><br>
                <label for="durasi">Durasi (jam) </label></br>
                <input type="number" id="durasi" name="durasi" placeholder="Durasi" required><br><br>
                <input type="submit" id="btn-reservasi" name="reservasi" value="Reservasi">
            </form>
        </div>
    </div>

    <script>
        var slideIndex = 1
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n)
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("slide");
            if (n > slides.length)
            {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex-1].style.display = "block";
        }

        // Modal JavaScript
        var modal = document.getElementById("myModal");
        var span = document.getElementsByClassName("close")[0];

        function showModal(paket) {
            document.getElementById("jenis_paket").value = paket;
            modal.style.display = "block";
        }

        span.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        var paketElements = document.querySelectorAll('.paket div');
        paketElements.forEach(function(element) {
            element.addEventListener('click', function() {
                var paket = this.getAttribute('data-paket');
                showModal(paket);
            });
        });
    </script>
</body>
</html>