<?php 
    if(isset($_POST["addbutton"])) {
        $name = $_POST["customer"];
        $ages =$_POST["age"];
        $numbers=$_POST["phone"];

        include "../../../configuration/database.php";
        
        mysqli_query($connection,"INSERT INTO customer(customername,customerage,customerphonen) values('$name','$ages','$numbers','$months') ");
        
    }

    header("location:../../../index.php");
    exit();
?>