<?php
    $connection = mysql_connect("localhost","root","","pizzadb");
    $username = $_post["username"];
    $password = $_post["password"];

    $checkdata = mysqli_query($connection,"SELECT * FROM customer_details WHERE username = '$username' AND password = '$password'");
    $check = mysqli_num_rows($checkdata);

    if($check>0) {
        echo "Signin Successful";
    } else {
        echo "Signin Failed";
    }
?>