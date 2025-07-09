<?php 
    require_once "../../../configuration/database.php";
    try {
        $iddata = $_GET['idcustomer'];

        $deletestatements = mysqli_query($connection,"DELETE FROM customer WHERE idcustomer=$iddata");
        if ($deletestatements == true) {
            echo "<script>alert('Data has been deleted'); window.location.href='../../admin.php'</script>";
        } else {
            echo "<script>alert('Failed to delete data.So,try again'); window.location.href='../../admin.php'</script>";
        }
    }
    catch(Exception $e) {
        echo "Error: " . $e->getMessage();
    }
?>