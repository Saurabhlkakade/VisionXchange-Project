
<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

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

    <!-- contact section starts  -->

    <section class="contact">

        <h1 class="title"> get in touch </h1>

        <div class="row">

            <form method="post" action="cont.php" class="row-contact" >
                <input type="text" placeholder="Your name" name="name" class="box">
                <input type="number" placeholder="Your number" name="number" class="box">
                <input type="email" placeholder="Your email" name="email" class="box">
                <textarea type="text" placeholder="Your message"  name="message" id="" cols="30" rows="10"></textarea>
                <input type="submit" value="send message" class="btn">
            </form>   
            
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15076.89592087332!2d72.8319697277345!3d19.14167056419224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1636210664473!5m2!1sen!2sin"
                allowfullscreen="" loading="lazy"></iframe>

        </div>

    </section>

    <!-- contact section ends --> 
	



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