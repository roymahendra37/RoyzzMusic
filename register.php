<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="assets/icon.png" />
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
        <title>Royzz Music - Register</title>
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
        <center>
            <form class="halregister" action="register-proses.php" method="post" enctype="multipart/form-data">>
                <div class="hregister">
                    <p>Register</p>
                    <label>Email</label>
                    <input class="input" type="text" name="email"/>
                    <label>Username</label>
                    <input class="input" type="text" name="username"/>
                    <label>Password</label>
                    <input class="input" type="password" name="password"/>
                    <button type="submit" name="register">Register</a></button>
                    <label>Sudah memiliki akun?</label>
                  <a href="login.php">Login</a>
                </div> 
            </form>
        </center>
    </body>
</html>