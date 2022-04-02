<?php
    $connection = mysql_connect("localhost","root","","pizzadb");
    $id = $_POST['id'];
    $type = $_post["pizza_type"];
    $toppings = $_post["pizza_toppings"];
    $size = $_post["pizza_toppings"];
    $number = $_post["pizza_number"];

    $input = mysqli_query($connection,"INSERT INTO pizza_details (id,pizza_type,pizza_toppings,pizza_size,pizza_number) VALUES ($id,$type,$toppings,$size,$number)");
    if ($input) {
        echo "Order Placed Successfully";
        } else {
            echo "Try Again - data given is not taken by the table"
        }
?>