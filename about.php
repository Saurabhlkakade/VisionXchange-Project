
<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

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

        <a href="home.php" class="logo"> <img src="images/logo.png" alt=""> </a>

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

        

    </header>

    <!-- header section ends -->

    <!-- header section  -->

    

    <!-- header section -->

    <!-- about section starts  -->

    <section class="about">

        <h1 class="title">why choose us?</h1>

        <div class="row">

            <div class="image">
                <img src="images/about-img.jpg" alt="">
            </div>

            <div class="content">
                <h3>the best eye glasses sellers</h3>
                <p>VisionXchange, the third major line of consumer business division from Titan Company Limited,
                   ventured into the eyewear category in March 2007. The move was an initiative to redefine 
                   the industry and straddle the marketplace with exacting quality standards, unparalleled 
                   in India’s prescription eyewear industry. Benchmarked against the best in the world,
                   VisionXchange heralds standardization in the eyewear industry.</p>
                <p>Titan Company Limited is an Indian company that mainly manufactures eyewear. Part of the Tata Group and started as a joint
                   venture with the TIDCO, the company has its corporate headquarters in Electronic City, 
                   Pune, and registered office in Pune, Maharastra.</p>
                
            </div>

        </div>

        <div class="icons-container">

            <div class="icons">
                <img src="images/icon-1.png" alt="">
                <h3>all sizes</h3>
            </div>

            <div class="icons">
                <img src="images/icon-2.png" alt="">
                <h3>free delivery</h3>
            </div>

            <div class="icons">
                <img src="images/icon-3.png" alt="">
                <h3>easy returns</h3>
            </div>

            <div class="icons">
                <img src="images/icon-4.png" alt="">
                <h3>easy payments</h3>
            </div>

            <div class="icons">
                <img src="images/icon-5.png" alt="">
                <h3>24/7 support</h3>
            </div>

        </div>

    </section>

    <!-- about section ends -->

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
            <input type="email" placeholder="enter your emal">
            <input type="submit" value="subscribe" class="btn">
        </form>
    </div>

   
</div>
<div class="credit"> created by <span>MCAIANS</span> | all rights reserved </div>



</section>



<!-- footer section ends -->


</body>

</php>