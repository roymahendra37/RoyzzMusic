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
            <div class="paket1" >
                <a class="linka" href="#" onclick="bukaModal()">
                    Paket 1<br/><br/>
                    Gitar (Rhythm)<br/>
                    Gitar (Lead)<br/>
                    Bass<br/>
                    Drum<br/><br/>
                    Rp 25.000/Jam<br/>
                </a>
            </div>
            <div class="paket2">
                <a class="linka" href="#" onclick="">
                    Paket 2<br/><br/>
                    Gitar (Rhythm)<br/>
                    Gitar (Lead)<br/>
                    Piano <br/>
                    Bass<br/>
                    Drum<br/><br/>
                    Rp 35.000/Jam<br/>
                </a>
            </div>
            <div class="paket3">
                <a class="linka" href="#" onclick="">
                    Paket 3<br/><br/>
                    Gitar (Rhythm)<br/>
                    Gitar (Lead)<br/>
                    Piano <br/>
                    MIDI <br/>
                    Bass<br/>
                    Drum<br/><br/>
                    Rp 50.000/Jam<br/>
                </a>
            </div>
        </div>
    </center>
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
    </script> 
</body>
</html>
