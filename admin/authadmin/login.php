<?php 
    session_start();
    require_once("../../configuration/database.php");
    try{
            if(isset($_POST['login'])) {
                $usernamas = $_POST['username'];
                $pass= $_POST['passwords'];
                $statements = $connection->prepare("SELECT * FROM user2 WHERE Usernames = ? AND password = ?");
                $statements->bind_param("ss", $usernamas, $pass);
                $statements->execute();
                $result = $statements->get_result();

                if($result->num_rows > 0) {
                    $_SESSION['user2'] = true;
                    $_SESSION['firstaccess'] = true;
                    $_SESSION['username'] = $usernamas;
                    echo "<script>alert('Login successfull'); window.location.href='../admin.php';</script>";
                }
                elseif (empty($usernamas) || empty($pass)) {
                        echo "<script>alert('Username or Password cannot be empty'); window.location.href='../authadmin/login.php';</script>";

                    }
                else {
                    echo "<script>alert('Username or Password is incorrect'); window.location.href='../authadmin/login.php';</script>";
                    
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
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <title>MuscleWarrior</title>
</head>
<body>

    <div class="wrap-login">
        <div class="login-title">
            <h1>LOGIN</h1>
        </div>  
        <form method="POST">
                <input type="text" name="username" class="inputlogin" placeholder="Enter your username">
                <input type="password" name="passwords" class="inputlogin" id="pass" placeholder="Enter your password">
            <div class="showpass">
                <input type="checkbox" id="checkpass" >
                <label for="pass" style="margin-top: 5px; font-size: 15px; ">Show password ?</label>
            </div>
            <button type="submit" name="login">Login</button>
        </form>
    </div>


<script src="../../assets/js/main.js">
</script>
</body>
</html>