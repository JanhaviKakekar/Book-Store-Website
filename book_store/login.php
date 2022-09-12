<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select_users = mysqli_query($conn, "SELECT * FROM `users_details` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){

      $row = mysqli_fetch_assoc($select_users);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         $_SESSION['admin_email'] = $row['email'];
         $_SESSION['admin_id'] = $row['id'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_email'] = $row['email'];
         $_SESSION['user_id'] = $row['id'];

         $_SESSION['user_name'] = $name;
         $_SESSION['user_email'] = $email;
         header('location:index.html');

      }

   }else{
      $message[] = 'incorrect email or password!';
   }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login_form</title>
    <link rel="stylesheet" href="css/formcss.css" />
    <link rel="stylesheet" href="css/navbar.css" />
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
            <a href="signup.php"><i class="fa fa-user-circle" aria-hidden="true" style="font-size:28px" ></i></a>
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
    <div class="form-container" style="height: 340px;">
        <form action="" method="post">
            <h2>Welcome !</h2>
           
            <p>Enter your Email</p>
            <input type="email" name="email" id="" >
            <p>Enter Password</p>
            <input type="password" name="password" id="">
            <br><br>
            <input type="submit"  name="submit" value="Login" >
</body>
</html>