<!DOCTYPE php>
<php>
<head>
<title>Online Store</title>
<meta charset="utf-8" />
<meta name="viewpoint" content="width=device-width,initial-scal=1.0">
<meta http-equip="X-UA-compatible" content="ie=edge">
<link rel="stylesheet" href="css/cstyle.css" media="screen" type="text/css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.store1.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>

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
	
<section class="new-arrivals">
	<h2 class="section-header">Our Products</h2></br>

<div id="site">

	<div class="container">	
	
    	<div class="row">
			<div class="col-md-3">							
			   <div class="product-bottom text-center">			
			       <h3>Frame Glass</h3>
			          <div class="product-description" data-name="Frame Glass" data-price="700">
						

				            <div class="product-top">
					            <img src="images/product_01.jpg">
									<br>
									
								<p class="product-price">&#8377;700</p>			
				            </div>
				            <form class="add-to-cart" action="cart.php" method="post">					
							   <div class="qunatity">
								<label for="qty-2"  >Quantity</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							   </div>							
							   <p><input type="submit" value="Add to cart" class="btn" /></p>
				            </form>						
		              </div>
		       </div>
	        </div>

			<div class="col-md-3">							
				<div class="product-bottom text-center">			
					<h3>Premium glasses</h3>
					   <div class="product-description" data-name="Premium glasses" data-price="900">
						 
 
							 <div class="product-top">
								 <img src="images/product_02.jpg">	
								 <p class="product-price">&#8377;900</p>			
							 </div>
 
							 <form class="add-to-cart" action="cart.php" method="post">					
								<div class="qunatity">
								 <label for="qty-2">Quantity</label>
								 <input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
								</div>							
								<p><input type="submit" value="Add to cart" class="btn" /></p>
							 </form>						
					   </div>
				</div>
			 </div>

			 <div class="col-md-3">							
				<div class="product-bottom text-center">			
					<h3>Classic Sunglasses</h3>
					   <div class="product-description" data-name="Classic Sunglasses" data-price="1500">
						 
 
							 <div class="product-top">
								 <img src="images/product_03.jpg">	
								 <p class="product-price">&#8377;1500</p>			
							 </div>
 
							 <form class="add-to-cart" action="cart.php" method="post">					
								<div class="qunatity">
								 <label for="qty-2">Quantity</label>
								 <input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
								</div>							
								<p><input type="submit" value="Add to cart" class="btn" /></p>
							 </form>						
					   </div>
				</div>
			 </div>

			 <div class="col-md-3">							
				<div class="product-bottom text-center">			
					<h3>Men glasses</h3>
					   <div class="product-description" data-name="Men glasses" data-price="800">
						 
 
							 <div class="product-top">
								 <img src="images/product_04.jpg">	
								 <p class="product-price">&#8377;800</p>			
							 </div>
 
							 <form class="add-to-cart" action="cart.php" method="post">					
								<div class="qunatity">
								 <label for="qty-2">Quantity</label>
								 <input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
								</div>							
								<p><input type="submit" value="Add to cart" class="btn" /></p>
							 </form>						
					   </div>
				</div>
			 </div>

			 <div class="col-md-3">							
				<div class="product-bottom text-center">			
					<h3>Kids glasses</h3>
					   <div class="product-description" data-name="Kids glasses" data-price="1100">
						 
 
							 <div class="product-top">
								 <img src="images/product_05.jpg">	
								 <p class="product-price">&#8377;1100</p>			
							 </div>
 
							 <form class="add-to-cart" action="cart.php" method="post">					
								<div class="qunatity">
								 <label for="qty-2">Quantity</label>
								 <input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
								</div>							
								<p><input type="submit" value="Add to cart" class="btn" /></p>
							 </form>						
					   </div>
				</div>
			 </div>

			 <div class="col-md-3">							
				<div class="product-bottom text-center">			
					<h3>Women Sunglasses</h3>
					   <div class="product-description" data-name="Women Sunglasses" data-price="600">
						 
 
							 <div class="product-top">
								 <img src="images/product_07.jpg">	
								 <p class="product-price">&#8377;600</p>			
							 </div>
 
							 <form class="add-to-cart" action="cart.php" method="post">					
								<div class="qunatity">
								 <label for="qty-2">Quantity</label>
								 <input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
								</div>							
								<p><input type="submit" value="Add to cart" class="btn" /></p>
							 </form>						
					   </div>
				</div>
			 </div>

			 <div class="col-md-3">							
				<div class="product-bottom text-center">			
					<h3>classic Specs</h3>
					   <div class="product-description" data-name="classic Specs" data-price="1500">
						 
 
							 <div class="product-top">
								 <img src="images/product_08.jpg">	
								 <p class="product-price">&#8377;1500</p>			
							 </div>
 
							 <form class="add-to-cart" action="cart.php" method="post">					
								<div class="qunatity">
								 <label for="qty-2">Quantity</label>
								 <input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
								</div>							
								<p><input type="submit" value="Add to cart" class="btn" /></p>
							 </form>						
					   </div>
				</div>
			 </div>

			 <div class="col-md-3">							
				<div class="product-bottom text-center">			
					<h3>Top Seller glasses</h3>
					   <div class="product-description" data-name="Top Seller glasses" data-price="2000">
						 
 
							 <div class="product-top">
								 <img src="images/product_10.jpg">	
								 <p class="product-price">&#8377;2000</p>			
							 </div>
 
							 <form class="add-to-cart" action="cart.php" method="post">					
								<div class="qunatity">
								 <label for="qty-2">Quantity</label>
								 <input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
								</div>							
								<p><input type="submit" value="Add to cart" class="btn" /></p>
							 </form>						
					   </div>
				</div>
			 </div>

			 <div class="col-md-3">							
				<div class="product-bottom text-center">			
					<h3>Gold Frame Glasses</h3>
					   <div class="product-description" data-name="Gold Frame Glasses" data-price="1700">
						 
 
							 <div class="product-top">
								 <img src="images/product_11.jpg">	
								 <p class="product-price">&#8377;1700</p>			
							 </div>
 
							 <form class="add-to-cart" action="cart.php" method="post">					
								<div class="qunatity">
								 <label for="qty-2">Quantity</label>
								 <input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
								</div>							
								<p><input type="submit" value="Add to cart" class="btn" /></p>
							 </form>						
					   </div>
				</div>
			 </div>		 



		</div>	
	</div>		
</div>			

</section>

<!-- footer section starts  -->

    
	

	
	

	
	












</body>
</php>	
