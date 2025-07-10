<?php
    $iddata=$_GET ['idcustomer'];
    include "../../../configuration/database.php";
    $takedata=mysqli_query($connection,"SELECT * FROM customer where idcustomer ='$iddata'");
    $showdata = mysqli_fetch_array($takedata);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/css/style.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="Main-editdata">
        <div class="Wrap-editdata">
            <div class="editdata-title">
                <h1>Edit data</h1>
            </div>
            <form class="editdataform" action="editadminaction.php" method="POST">
                <label for="idname">Id Customer</label>
                <input type="text" name="cusid" id="cusid" value="<?php echo $showdata["idcustomer"] ?>"readonly>
                <label for="cname">Customer name</label>
                <input type="text" name="namecus" id="namecus" value="<?php echo $showdata ['customername']?>">
                <label for="cname">Customer age</label>
                <input type="text" name="agecus" id="agecus" value="<?php echo $showdata ['customerage'] ?>">
                <label for="cname">Number phone</label>
                <input type="text" name="numcus" id="numcus" value="<?php echo $showdata ['customerphonen']?>">
                <div class="buttonedit">
                    <button type="submit"onclick="return confirm('Are you sure you want to edit the data ?')">Edit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>