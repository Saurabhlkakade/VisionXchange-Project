<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>

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
            <ul>
                <li><a href="home.php">home</a></li>               
                <li><a href="#">account</a>
                    <ul>
                        <li><a href="login.php">login</a></li>
                        <li><a href="register.php">register</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

       

    </header>

    <!-- header section ends -->

   
    <!-- register form section starts -->

    <section class="register-form">

        <form method="post" action="validation.php">
            <h3>register now</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" name="user" placeholder="enter your name" id="">
            </div>            
            <div class="inputBox">
                <span class="fas fa-lock"></span>
                <input type="password" name="password" placeholder="enter your password" id="">
            </div>           
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" name="email" placeholder="enter your email" id="">
            </div> 
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="number" name="contact" placeholder="enter your contact" id="">
            </div>
            <input type="submit" value="sign up" class="btn">
            <a href="login.php" class="btn">already have an account</a>
        </form>

    </section>

    <!-- register form section ends -->

</body>

</php>