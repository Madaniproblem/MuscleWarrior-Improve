<?php 
    $username = "root";
    $password = "";
    $database = "tugasakhirnative"; 
    $host = "localhost";
    $connection = new mysqli($host,$username,$password,$database);

    if($connection->connect_error) {
        echo "Connection failed".mysqli_connect_error();
    }
?>
