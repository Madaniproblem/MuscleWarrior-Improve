<?php 
    require_once "../../../configuration/database.php";
    try {
        if(isset($_POST["addbutton"])) {
        $name = $_POST["customer"];
        $ages =$_POST["age"];
        $numbers=$_POST["phone"];

        $addedquery = $connection->query("INSERT INTO customer(customername,customerage,customerphonen) values('$name','$ages','$numbers','$months') ");
        if ($addedquery == true) {
            echo "<script>alert('Data has been added'); window.location.href='../../../index.php'</script>";
        } else {
            echo "<script>alert('Failed to add data. Please try again'); window.location.href='../../admin.php'</script>";
        }
        
        }
    }
    catch(Exception $e) {
        echo "Error: " . $e->getMessage();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../designweb/style.css">
    <title>MuscleWarrior</title>
</head>
<body>
    <div class="Main-adddata">
        <div class="wrap-adddata">

        <div class="adddata-title">
            <h1>We go GYM</h1>
        </div>
            <form class="adddataform" method="POST">
                <input type="text" name="customer" placeholder="Enter your name" required>
                <input type="text" name="age" min="2" placeholder="Enter your age" required>
                <input type="text" name="phone" min="12" placeholder="Enter your number" required>
                <div class="duobutton">
                    <a href="../../../index.php">Back</a>
                    <button type="submit" name="addbutton">Send</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>