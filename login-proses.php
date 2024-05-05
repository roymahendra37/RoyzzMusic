<?php 
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo
    'username : ' . $username . 
    '<br> password : ' . $password;
}
?>