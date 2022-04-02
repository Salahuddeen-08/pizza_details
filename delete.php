<?php
    $connection = mysql_connect("localhost","root","","pizzadb");

    $input = mysqli_query($connection,"DELETE FROM pizzadetails ORDER BY id DESC limit 1");

    if($input) {
        echo "Thank You for your Order";
    } else {
        echo "Error";
    }
?>