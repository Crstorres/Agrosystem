<?php 

    include './connect.php';
    $connect = mysqli_connect($hostname, $username, $password, $database);

    $temperature = $_POST["temperature"];
    $humidity = $_POST["humidity"];

    $result=$connect->query("UPDATE dht11 SET temperature=$temperature,  humidity=$humidity WHERE id=*");

    mysqli_close($connect);