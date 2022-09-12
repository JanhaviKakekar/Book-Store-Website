<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $user_type = $_POST['user_type'];

   $select_users = mysqli_query($conn, "SELECT * FROM `users_details` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){
      $message[] = 'user already exist!';
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }else{
         mysqli_query($conn, "INSERT INTO `users_details`(name, email, password, user_type) VALUES('$name', '$email', '$cpass', '$user_type')") or die('query failed');
         $message[] = 'registered successfully!';
        //  header('location:login.php');
      }
   }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register_Form</title>
    <link rel="stylesheet" href="css/formcss.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav>
        <ul>
          <li class="primary-nav">
            <img src="Img/logo.png" alt="logo" />
            <a href="#"> </a>
          </li>
          
          <li class="secondary-nav">
            <a href="signup.html"><i class="fa fa-user-circle" aria-hidden="true" style="font-size:28px" ></i></a>
          </li> 
          <li class="secondary-nav">
            <a href="contact.html">CONTACT US</a>
          </li>
          <li class="secondary-nav">
            <a href="about.html">ABOUT US</a>
          </li>

          <li class="secondary-nav"><a href="review.html">REVIEW</a></li>
          <li class="secondary-nav"><a href="Product.html">BOOKS</a></li>
          <li class="secondary-nav"><a href="index.html">HOME</a></li>
        </ul>
      </nav>
    <br><br><br><br>
    <?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
      
         <i class="fa fa-times" aria-hidden="true" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>
    <div class="form-container">
        <form action="" method="post">
            <h2>Register Here !</h2>
            <p>Enter your name</p>
            <input type="text" name="name" id="" style="text-align: center;" >
            <p>Enter your Email</p>
            <input type="email" name="email" id="" >
            <p>Enter Password</p>
            <input type="password" name="password" id="">
            <p>Confirm your password</p>
            <input type="password" name="cpassword" id="">
            <br>
            <select name="user_type" id="" class="box">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select><br>

            <input type="submit"  name="submit" value="Register Now" class="btn">
            <p>Already hava an account? <a href="login.php" target="_blank">Login now</a></p>
           
        </form>
    </div>
    
</body>
</html>