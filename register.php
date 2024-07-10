<?php 

include 'conn.php';

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $prenom = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $num_telephone = mysqli_real_escape_string($conn,$_POST['num_telephone']);
    $adresse = mysqli_real_escape_string($conn,$_POST['adresse']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
    $cpass = mysqli_real_escape_string($conn, md5($_POST['cpass']));
    $user_type = mysqli_real_escape_string($conn,$_POST['user_type']);

    $select_users = mysqli_query($conn,"SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

    if(mysqli_num_rows($select_users) > 0 ){
        $message[] = 'user already exist!';
    }else{
        if($pass != $cpass){
            $message[] = 'confirm password not matched!';
        }else{
            mysqli_query($conn,"INSERT INTO `users`(name,prenom,email,num_telephone,adresse,password,user_type,cpass) VALUES('$name','$prenom','$email','$num_telephone','$adresse','$pass','$user_type','$cpass')")
            or die('query failed');
            $message[] = 'registered successfully!';
            header('location:login.php');
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="center">
        <h1>Register </h1>
        <form action="register.php" method="post">
            <div class="field">
                <input type="text" name="name" required>
                <span></span>
                <label>Enter your name </label>
            </div>
            <div class="field">
                <input type="text" name="prenom" required>
                <span></span>
                <label>Enter your last name</label>
            </div>
            <div class="field">
                <input type="email" name="email" required>
                <span></span>
                <label>Enter your email</label>
            </div>
            <div class="field">
                <input type="password" name="password" required>
                <span></span>
                <label>Enter your password</label>
            </div>
            
            <div class="field">
                <input type="password" name="cpass" required>
                <span></span>
                <label>Confirm your password</label>
            </div>
            <div class="field">
                <input type="number" name="num_telephone" required>
                <span></span>
                <label>Enter your phone number</label>
            </div>
            <div class="field">
                <input type="adresse" name="adresse" required>
                <span></span>
                <label>Enter your Adresse <address></address></label>
            </div>
            <div class="field">
                <input type="text" name="user_type" required>
                <span></span>
                <label>user or admin</label>
            </div>
            <input type="submit" value="Register" name="submit">
            
            <div class="signup_link">
            already have an account?<a href="login.php">Login</a>
            </div>
        </form>
    </div>
</body>
</html>