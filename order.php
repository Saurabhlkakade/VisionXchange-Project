<!DOCTYPE php>
<php>
<head>
<title>Your Order</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="css/cstyle.css" media="screen" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.store1.js"></script>
</head>

<body id="checkout-page" >

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

<div id="site">
	
	<div id="content">	

	<p class="sectionheader">Thank You !!! Your order has been placed succesfully !</p></br>
		
	
		<h2 class="section-header">Receipt</h2></br>
			<table id="checkout-cart" class="shopping-cart">
			  <thead>
				<tr>
					<th scope="col">Item</th>
					<th scope="col">Qty</th>
					<th scope="col">Price</th>
				</tr>
			  </thead>
			  <tbody>
			  
			  </tbody>
			</table>
		 <div id="pricing">
			
			<p id="shipping">
				<strong>Shipping</strong>: <span id="sshipping"></span>
			</p>
			
			<p id="sub-total">
				<strong>Total</strong>: <span id="stotal"></span>
			</p>
		 </div>
		 
		 <div id="user-details">
		 	<div id="user-details-content"></div>
		 </div>
		 <div class="bak">
			<a href="index.php">Back To Home</a>
		 </div>
		 

		 
		 
	</div>
	
	

</div>



</body>
</php>	

   
