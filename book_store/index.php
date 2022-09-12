
<?php
include 'config.php';
session_start();
// if(isset($message)){
//    foreach($message as $message){
//       echo '
//       <div class="message">
//          <span>'.$message.'</span>
//          <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
//       </div>
//       ';
//    }
// }
$user_id = $_SESSION['user_id'];
if(!isset($user_id)){
  header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Book Store</title>
    <link rel="shortcut icon" type="image/x-icon" href="Images/img-DS.png" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/navbar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/preloader.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
      integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
      crossorigin="anonymous"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="./js/preloader.js"></script>
  </head>

  <body>
    <div class="se-pre-con"></div>
    <header id="home">
      <nav>
        <ul>
          <li class="primary-nav">
            <img src="Img/logo.png" alt="logo" />
            <a href="#"> </a>
          </li>
          
          <li class="secondary-nav">
            <!-- <a href=""><i  id="user-btn"class="fa fa-user-circle" aria-hidden="true" style="font-size:28px" ></i></a> -->
            <i  id="user-btn"class="fa fa-user-circle" aria-hidden="true" style="font-size:28px" ></i>
          </li> 
          </ul>
          <ul class="center">
            <li><a href="index.html">HOME</a></li>
          <li><a href="Product.html">BOOKS</a></li>
          <li><a href="review.html">REVIEW</a></li> 
          <li><a href="signup.php">REGISTER</a></li>
          <li><a href="about.html">ABOUT US</a></li>
          <li><a href="contact.html">CONTACT US</a></li> 
          <!-- <li>
            <a href="contact.html">CONTACT US</a>
          </li>
          <li>
            <a href="about.html">ABOUT US</a>
          </li>
          <li>
            <a href="signup.php">REGISTER</a>
          </li>
          <li><a href="review.html">REVIEW</a></li>
          <li><a href="Product.html">BOOKS</a></li>
          <li><a href="index.html">HOME</a></li>  -->
        </ul>
      </nav>
      <br><br><br><br>
      <div class="user_box" style="z-index: 1;">
        <!-- <p>username : <span><?php echo ($_SESSION['user_name']); ?></span></p> -->
        <p>email : <span><?php echo ($_SESSION['user_email']); ?></span></p>
        <a href="logout1.php" class="del-btn">Logout</a>
      </div>
      <video autoplay loop muted plays-inline class="back-video">
        <source src="Img/video.mp4" type="video/mp4">
      </video>
      
      <div class="pxtext">
        
        <p1 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" > <b>Book Store</b> </p1>
      </div>
      

    </header><br><br>
    <button><a href="Product.html">Shop Now</a></button>
    </section>
    <section class="preview">
      <h2 align="center">Some of Our Books!!</h2>
      <div
        class="row"
        style="  width: 80%;
      margin: 0 auto;"
      >
        <figure class="item">
          <a href="#">
            <img src="Img/book1.jpg" alt="" width="100%" />
            <figcaption>Pretend I m Dead</figcaption>
          </a>
        </figure>
        <figure class="item">
          <a href="#l">
            <img src="Img/book2.jpg" alt="" width="100%" />
            <figcaption>Followers</figcaption>
          </a>
        </figure>
        <figure class="item">
          <a href="#">
            <img src="Img/book3.jpg" width="100%" />
            <figcaption>Angel Maker</figcaption>
          </a>
        </figure>
        <figure class="item">
          <a href="HTML/info.html">
            <img src="Img/book4.jpg" alt="" width="100%" />
            <figcaption>Acceptance</figcaption>
          </a>
        </figure>
        <figure class="item">
          <a href="HTML/info.html">
            <img src="Img/book5.jpg" alt="" width="100%" />
            <figcaption>Tomi Morison</figcaption>
          </a>
        </figure>
      </div>
    </section><br><br><br><br><br>

    <script src="https://use.fontawesome.com/a6f0361695.js"></script>
    <div class="about-section">
      <h1>About Us </h1>
      <p>Some text about who we are and what we do.</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque eum, tenetur similique commodi doloremque ducimus ullam architecto quis expedita consequuntur iusto dolorem cum praesentium, necessitatibus deleniti sapiente quia qui modi?</p>
      <p>Resize the browser window to see that this page is responsive by the way.</p>
    </div>
      
      
<br> <br> <br> <br>

<section class="footer">

  <div class="box-container">

      <div class="box">
        <br>
        <br>
        <img src="Img/logo.png" height="60" width="120" alt="logo" /><br> 
        <h2><b>about company</b></h2>
        <p style="font-family:Verdana, Geneva, Tahoma, sans-serif">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint blanditiis at, delectus vel dolores inventore voluptate debitis dolore illo officiis eum! Veritatis facere voluptatem, impedit maiores nemo cumque voluptatum ad.!</p>
      </div>
      <br>
      <div class="box">
          <h2>quick links</h2>
          <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
          <a href="#"> <i class="fas fa-arrow-right"></i> Books </a>
          <a href="#"> <i class="fas fa-arrow-right"></i> featured </a>
          <a href="#"> <i class="fas fa-arrow-right"></i> review </a>
          <a href="#"> <i class="fas fa-arrow-right"></i> contact </a>
          <a href="#"> <i class="fas fa-arrow-right"></i> blogs </a>
      </div>

      

  </div>

  
  
  
</section>

<!-- footer section ends -->
    <footer id="footer-social">
      
      <ul class="row foot-icons" style="list-style-type: none;">
        <li>
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
             ><i class="fab fa-facebook-f"></i
            ></a>
        </li>
        <li>
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
             ><i class="fab fa-twitter"></i
            ></a>
        </li>
        <li>
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-google"></i
         ></a>
        </li>
        <li>
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
             ><i class="fab fa-instagram"></i
            ></a>
        </li>
        <li>
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
             ><i class="fab fa-linkedin-in"></i
            ></a>
        </li>
        <li>
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-github"></i
         ></a>
        </li>
      </ul>
      
    </footer>


   
    
    <script src="script.js"></script>
  </body>
</html>
