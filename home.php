<?php

include 'conn.php';

session_start();
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

    <?php
    include 'header.php'
    ?>

    <!-- Homme section -->

    <div id="silde" class="carousel carousel-dark slide">
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#silde" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#silde" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#silde" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="img/8.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption ">
                <h5>Your health is your priority</h5>
                <p> Ouitas pharmacy</p>
                <p><a href="#about" class="btn btn-primary">for more information</a></p>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="img/4.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption ">
            <h5>welcome to our world </h5>
                <p>  Ouitas pharmacy </p>
                <p><a href="#about" class="btn btn-primary">for more information</a></p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption ">
            <h5>welcome to our world </h5>
                <p>  Ouitas pharmacy </p>
                <p><a href="#about" class="btn btn-primary">for more information</a></p>
            </div>
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#slide" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#slide" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!--About section -->
    <section class="about" id="about">
        <h3 class="title-1">about us</h3>
        <h1 class="title-2">Why chose us?</h1>
        <div class="container">
            <div class="row">

                <div class="col image ">
                    <img src="img/1.jpg" alt="">
                </div>
                <div class="col content ">
                    <p>
                    Welcome to HPharmacie, your trusted destination for all your pharmaceutical needs. At HPharmacie, we are committed to providing top-quality healthcare products and services to our valued customers.

Founded with a mission to prioritize health and well-being, HPharmacie is dedicated to offering a comprehensive range of pharmaceutical products, from prescription medications to over-the-counter remedies, ensuring that you have access to the medications you need to live a healthy life.
                    </p>
                    <a href="contact.php" class="btn btn-primary">contact us</a>
                </div>
                    
            </div>

        </div>
        
        

    </section>

    <!--products-->

    <section class="products" id="medi">

        <h1 class="title-1"> Medicament</h1>

        <div class="box-container">

            <?php  
                $select_products = mysqli_query($conn, "SELECT * FROM `medicament` LIMIT 6") or die('query failed');
                if(mysqli_num_rows($select_products) > 0){
                    while($fetch_products = mysqli_fetch_assoc($select_products)){// jbadhom man tableau w afficher fal page  
                    ?>
                    <form action="" method="post" class="box">
                        <img class="image" src="img/<?php echo $fetch_products['image']; ?>" alt="">
                        <div class="name"><?php echo $fetch_products['name']; ?></div>
                        <div class="price">$<?php echo $fetch_products['price']; ?></div>
                        
                        <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
                        <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>"> <!--jbadha w 7atha w affichiha-->
                        <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
                        
                        
                    </form>
                    <?php
                    }
                }else{
                    echo '<p class="empty">no products added yet!</p>';
                }
            ?>
    
        </div>
        <div class="load-more" style="margin-top: 2rem; text-align:center">
            
        </div>

    </section>

    <!--footer-->

    <!--! footer section-->

    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col cent">
                    <h3>Quick link</h3>
                    <a href="#home">home</a>
                    <a href="#about">about</a>
                    <a href="#menu">products </a>
                    <a href="#review">review</a>
                    <a href="#order">contact</a>

                </div>
                <div class=" col cent">
                    <h3>contact info</h3>
                    <a href="#">+123-456-7890</a>
                    <a href="#">+111-222-4444</a>
                    <a href="#">--------------@gmail.com</a>
                    <a href="#">ooooo@gmail.com</a>
                    <a href="#">mumbai,india - 364653473</a>

                </div>
            </div>
            

            

            
           
        </div>

        <div class="bottom">

            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-pinterest"></a>
            </div>
    
            <div class="credit"> created <span>wissal mrbt</span> | all rights reserved! </div>
            
        </div>
        
    </section>
    
    <script src="js/script.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/cdn.jsdelivr.net_npm_@popperjs_core@2.11.8_dist_umd_popper.min.js"></script>
    <script src="js/code.jquery.com_jquery-3.7.1.min.js"></script>
</body>
</html>