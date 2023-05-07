<?php

session_start();

$con = mysqli_connect('localhost','root', '');

mysqli_select_db($con, 'grocery store register');

if(isset($_POST['email'])){
$email = $_POST['email'];
$password1 = $_POST['password1'];

$s = " select * from register where email = '$email' && password1 = '$password1'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1)
{
    header('location:  1_first_page.html');
}
else{
    header('location: login.html');

}

}


?>