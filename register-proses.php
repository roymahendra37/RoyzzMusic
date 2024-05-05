<?php 
if(isset($_POST['register'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo
    'email : ' . $email .
    '<br>username : ' . $username . 
    '<br> password : ' . $password;
}
?>