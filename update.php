<?php
    $connection = mysql_connect("localhost","root","","pizzadb");
    $username = $_post["username"];
    $password = $_post["password"];

    $input = mysqli_query($connection,"UPDATE customerdetails SET password = '$password' WHERE username = '$username'");

    if($input) {
        echo "Date updated successfully";
    } else {
        echo "Error";
    }
?>