<?php
    ini_set('session.gc_maxlifetime', 3600);
    session_set_cookie_params(3600);

    session_start();

    if(!isset($_SESSION['user2'])|| $_SESSION['user2'] !== true) {
        header('Location:authadmin/login.php');
        exit();
    }

    if(isset($_SESSION['firstaccess']) && $_SESSION['firstaccess']=== true) {
        unset($_SESSION['firstaccess']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <!-- CSS PLUGIN -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- DATATABLE PLUGIN -->
    <link rel="stylesheet" href="../datatable/datatables.min.css">
    <script type="text/javascript" src="../datatable/datatables.min.js"></script>


    <!-- Icons -->
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body>

<?php include("../components/adminnavigation.php"); ?>

<div class="table-customer">
    <table id="table-data" class="display">
        <thead>
            <tr>
                <th>Num</th>
                <th>Customer name</th>
                <th>Age</th>
                <th>Phone number</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                require_once("../configuration/database.php");
                $takedata = mysqli_query($connection,"SELECT * FROM customer");
                $startnumber = 1;
                while($showdata=$takedata->fetch_assoc()):
            ?>
            <tr>
                <td><?php echo $startnumber++; ?></td>
                <td><?php echo $showdata["customername"]; ?></td>
                <td><?php echo $showdata["customerage"]; ?></td>
                <td><?php echo $showdata["customerphonen"]; ?></td>
                <td>
                    <div class="wrap-action">
                        <a class="text-light btn btn-success text-decoration-none">Show</a>
                        <a class="text-light btn btn-primary text-decoration-none" href="admindata/customerexecute/editadmin.php?idcustomer=<?php echo $showdata['idcustomer']; ?>">edit</a>
                        <a class="deletebtn text-light btn btn-danger text-decoration-none" href="admindata/customerexecute/deleteexecute.php?idcustomer=<?php echo $showdata['idcustomer']; ?>">delete</a>
                    </div>
                </td>
            </tr>
            <?php
                endwhile;
            ?>
        </tbody>
    </table>
</div>

<script src="../assets/js/main.js"></script>
<script>
    $(document).ready(function () {
        $('#table-data').DataTable();
    }); 
</script>
</body>
</html>