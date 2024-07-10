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
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="css/style_admin.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

</head>
<body>
    <?php include 'admin_header.php'; ?>

  

    <section class="show-products">

        <div class="box-container">

            <?php
                $select_plat = mysqli_query($conn, "SELECT * FROM `medicament`") or die('query failed');
                if(mysqli_num_rows($select_plat) > 0){
                    while($fetch_plat = mysqli_fetch_assoc($select_plat)){
            ?>
            <div class="box">
                <img src="img/<?php echo $fetch_plat['image']; ?>" alt="">
                <div class="name"><?php echo $fetch_plat['name']; ?></div>
                <div class="price">$<?php echo $fetch_plat['price']; ?></div>
                
            </div>
            <?php
                }
            }else{
                echo '<p class="empty">no plat added yet!</p>';
            }
            ?>
        </div>

    </section>

    

</body>
</html>