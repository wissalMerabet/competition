<?php

include 'conn.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exempl</title>  
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="css/style_user.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    
</head>
<body id="page-top">
    <header class="header">
        <div class="container">
            <nav id="main-menu" class="navbar navbar-expand-lg fixed-top">
                <a href="#page-top" class="navbar-brand "><span><i class="fa-solid fa-map-pin fa-xs"></i></span></i>Ouitas pharmacy</a>
                <a href="#x" class="navbar-toggler" data-bs-toggle="collapse">
                    <span class="navbar-toggler-icon"></span>
                </a>
                <div class="collapse navbar-collapse " id="x">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a href="home.php" class="nav-link active">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#medi" class="nav-link">Medicament</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="contact.php" class="nav-link">contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link"><i class="fa-solid fa-magnifying-glass"></i></a>
                        </li>
                        
                    </ul>
    
                    <div class="icons">
                        
                        <a href="login.php" class="btn btn-outline-info">Login</a>
                        <a href="register.php" class="btn btn-info">Register</a>
                        
                        
                    </div>
                </div>
            </nav>
        </div>
    </header>
    


    <script src="js/script.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/cdn.jsdelivr.net_npm_@popperjs_core@2.11.8_dist_umd_popper.min.js"></script>
    <script src="js/code.jquery.com_jquery-3.7.1.min.js"></script>

</body>
</html>