<?php 
    require_once "../../../configuration/database.php";
    try {
        $idcust = $_POST["cusid"];
        $namecus = $_POST["namecus"];
        $agecus = $_POST["agecus"];
        $phonecus = $_POST["numcus"];


        $editquery = $connection->query("UPDATE customer SET 
                        customername = '$namecus',
                        customerage = '$agecus',
                        customerphonen = '$phonecus'
                        WHERE idcustomer = '$idcust'");
        if ($editquery == true) {
            echo "<script>alert('Data has been updated'); window.location.href='../../admin.php'</script>";
        } else {
            echo "<script>alert('Failed to update data. Please try again'); window.location.href='../../admin.php'</script>";
        }
    }
    catch(Exception $e) {
        echo "Error: " . $e->getMessage();
    }
?>