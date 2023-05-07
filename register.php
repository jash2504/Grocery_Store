
<?php

session_start();

$con = mysqli_connect('localhost','root', '');

mysqli_select_db($con, 'grocery store register');

if (isset($_POST['email'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password2 = $_POST['password2'];
    $password1 = $_POST['password1'];
    $s = " select * from register where email = '$email'";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);
    if($num == 1)
    {
        echo"Username Already Taken";
    }
    else{
        $reg = "insert into register(username , email ,  password1 , password2) values ('$username' ,'$email' , '$password1' , '$password2') ";
        mysqli_query($con, $reg);
        header("Location: http://localhost/files/login.html");
    }
    }
    ?>  

    

