<?php

session_start();

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'grocery store login');

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    // $last = $_POST['last'];
    // $email = $_POST['email'];
    $password = $_POST['password'];

    $s = " select * from log_data where email = '$email'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if ($num == 1) {
        echo "Username Already Taken";
    } else {
        $reg = "insert into log_data(email , password) values ('$email' ,  '$password') ";
        mysqli_query($con, $reg);
        echo "Registration Successful";
    }
}
?>