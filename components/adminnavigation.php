<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    
    <!-- BOOTSTRAP PLUGIN -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <div class="logo">
                <h1 style="font-size: 25px;">Dashboard</h1>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav ms-auto my-2 my-lg-0 fs-5 navbar-nav-scroll" style="--bs-scroll-height: 400px;">
                <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Hi,<?php echo $_SESSION['username'] ?>
            </a>
            <ul class="dropdown-menu">
                <li><hr class="dropdown-divider"></li>
                <li>
                    <a class="dropdown-item">Profile</a>
                <li>
                    <a class="dropdown-item" id="logoutbtn" href="../admin/authadmin/logout.php" >Log out</a>
                </li>
                <li><hr class="dropdown-divider"></li>
            </ul>
        </li>
            </ul>
            </div>
        </div>
        </nav>

</body>
</html>