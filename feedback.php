
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

    </header><br>

    <div class="feedback">
    THANK YOU FOR <br>YOUR FEEDBACK
    </div>
    
	



   
</body>

</php>