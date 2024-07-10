<?php

include 'conn.php';

session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){
        $row = mysqli_fetch_assoc($select_users);

        if($row['user_type'] == 'admin'){
            header('location:home_admin.php');
        }else{
            if($row['user_type'] == 'user'){
                header('location:home.php');
            }
        }
    }
        

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="center">
        <h1>Login</h1>
        <form action="login.php" method="post">
        <div class="field">
                <input type="email" name="email" required onchange="test1()">
                <span></span>
                <label>Email</label>
            </div>
            <div class="field">
                <input type="password" name="password" required onchange="test2()">
                <span></span>
                <label>Password</label>
            </div>
            
            <input type="submit" value="login" name="submit">
            
            <div class="signup_link">
                Not a member? <a href="register.php">Register</a>
            </div>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>