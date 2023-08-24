<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <!-- font awesome cdn link  -->
    

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

    

    <!-- login form section starts -->

    <section class="login-form">

        <form method="post" action="server.php">
            <h3>user login</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" name="user" placeholder="enter your name" id="">
            </div>
            <div class="inputBox">
                <span class="fas fa-lock"></span>
                <input type="password" name="password" placeholder="enter your password" id="">
            </div>
            <input type="submit" value="sign in" class="btn">
            <a href="register.php" class="btn">create an account</a>
        </form>

    </section>

    <!-- login form section ends -->

</body>

</php>