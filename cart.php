<!DOCTYPE php>
<php>
<head>
<title>Your Shopping Cart</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="css/cstyle.css" media="screen" type="text/css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.store1.js"></script>

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
	<br>

<div id="site">
	
	<div id="content">
		<h2 class="section-header">Shopping Cart</h2></br>
		<form id="shopping-cart" action="cart.php" method="post">
			<table class="shopping-cart">
			  <thead>
				<tr>
					<th scope="col">Item</th>
					<th scope="col">Qty</th>
					<th scope="col" colspan="2">Price</th>
				</tr>
			  </thead>
			  <tbody>
			  
			  </tbody>
			</table>
			<p id="sub-total">
				<strong>Sub Total</strong>: <span id="stotal"></span>
			</p>
			<ul id="shopping-cart-actions">
				
				<li>
					<input type="submit" name="delete" id="empty-cart" class="btn" value="Empty Cart" />
				</li>
				<li>
					
					<a href="shop.php" class="btnm">Goto Shop</a>
					
				</li>
				<li>
					<a href="checkout.php" class="btnm">Checkout</a>
				</li>
			</ul>
		</form>
	</div>

</div>   

</body>
</php>	
