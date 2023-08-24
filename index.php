<?php 
  session_start();
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>

<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- custom js file link  -->
    <script src="js/script.js" defer></script>

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="about.php" class="logo"> <img src="images/logo.png" alt=""> </a>

        <nav class="navbar">
            <ul class="nav">
                <li><a href="index.php">home</a></li>
                <li><a href="shop.php">product</a> </li>
                <li><a href="about.php">about</a></li>
                <li><a href="contact.php">contact</a></li>
                <?php if (isset($_SESSION['success'])) : ?>  	
               <?php echo $_SESSION['success'];
               unset($_SESSION['success']);
               ?>      
  	          <?php endif ?>
                <li><a href="index.php?logout='1'">logout</a></li>  
               </ul>            
        </nav>
        
        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="search-btn" class="fas fa-search"></div>
            
        </div>

        

    </header>

    <!-- header section ends -->

    <!-- home section starts      -->

    <section class="home">

        <div class="slide active" style="background: url(images/home_bg_1.jpg) no-repeat;">
            <div class="content">
                <span>New Arrivals</span>
                <h3>upto 50% off</h3>
                <a href="shop.php" class="btn">shop now</a>
            </div>
        </div>

        <div class="slide" style="background: url(images/home_bg_2.jpg) no-repeat;">
            <div class="content">
                <span>Trending</span>
                <h3>upto 30% off</h3>
                <a href="shop.php" class="btn">shop now</a>
            </div>
        </div>

        <div class="slide" style="background: url(images/home_bg_3.jpg) no-repeat;">
            <div class="content">
                <span>protect your eyes</span>
                <h3>upto 50% off</h3>
                <a href="shop.php" class="btn">shop now</a>
        </div>
        </div>

        <div id="next-slide" onclick="next()" class="fas fa-angle-right"></div>
        <div id="prev-slide" onclick="prev()" class="fas fa-angle-left"></div>

    </section>

    <!-- home section ends     -->

    <!-- banner section starts  -->

    <section class="banner">

        <div class="box">
            <img src="images/Eyeglass_product.jpg" alt="">
            <div class="content">
                <span>Eye<br>Glasses</span>
                <a href="shop.php" class="btn">show more</a>
            </div>
        </div>

        <div class="box">
            <img src="images/Sunglass_product.jpg" alt="">
            <div class="content">
                <span>Sun<br>Glasses</span>
                <a href="shop.php" class="btn">show more</a>
            </div>
        </div>

        <div class="box">
            <img src="images/Kidsglass_product.jpg" alt="">
            <div class="content">
                <span>Kids<br>glasses</span>
                <a href="shop.php" class="btn">show more</a>
            </div>
        </div>

        <div class="box">
            <img src="images/Computer_product.jpg" alt="">
            <div class="content">
                <span>Computer<br>Glasses</span>
                <a href="shop.php" class="btn">show more</a>
            </div>
        </div>

        <div class="box">
            <img src="images/PowerSunglass_product.jpg" alt="">
            <div class="content">
                <span>Power Sun<br>Glasses</span>
                <a href="shop.php" class="btn">show more</a>
            </div>
        </div>

        
    </section>

    <!-- banner section ends -->    

    <!-- footer section starts  -->

    <section class="footer">   

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
                <a href="shop.php"> <i class="fas fa-angle-right"></i> products</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>                
                <a href="contact.php"> <i class="fas fa-angle-right"></i> contact</a>               
                <a href="cart.php"> <i class="fas fa-angle-right"></i> cart</a>
            </div>

            <div class="box">
                <h3>extra links</h3>                
                <a href="order.php"> <i class="fas fa-angle-right"></i> my order </a>
                <a href="#"> <i class="fas fa-angle-right"></i> terms of use </a>
                <a href="#"> <i class="fas fa-angle-right"></i> privacy policy </a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
                <a href="#"> <i class="fab fa-github"></i> github </a>
            </div>

            <div class="box">
                <h3>newsletter</h3>
                <p>subscribe for latest updates</p>
                <form action="">
                    <input type="email" placeholder="Enter your email">
                    <input type="submit" value="subscribe" class="btn">
                </form>
            </div>

           
        </div>
        <div class="credit"> created by <span>MCAIANS</span> | all rights reserved </div>

        

    </section>

 

    <!-- footer section ends -->

</body>

</php>