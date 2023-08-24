<!DOCTYPE php>
<php>
<head>
<title>Checkout</title>
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
		<h2 class="section-header">Checkout</h2></br>
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
			
			
			
			<p id="sub-total">
				<strong>Total</strong>: <span id="stotal"></span>
			</p>
		 </div>
		 
		 <form  method="post" action="receipt.php" id="checkout-order-form">
			<h2 class="section-header">Your Details</h2></br>
	
		 	<fieldset id="fieldset-billing" >
				
		 		<div class="detail">
		 			<label for="name">Name </label>&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text" name="name" id="name" data-type="string" data-message="This field cannot be empty" />
		 		</div>
		 		<div  class="detail">
		 			<label for="email">Email</label>&nbsp;&nbsp;&nbsp;&nbsp;
		 			<input type="text" name="email" id="email" data-type="expression" data-message="Not a valid email address" />
		 		</div>
		 		<div  class="detail">
		 			<label for="city">City</label>&nbsp;&nbsp;&nbsp;&nbsp;
		 			<input type="text" name="city" id="city" data-type="string" data-message="This field cannot be empty" />
		 		</div>
		 		<div  class="detail">
		 			<label for="address">Address</label>&nbsp;&nbsp;&nbsp;&nbsp;
		 			<input type="text" name="address" id="address" data-type="string" data-message="This field cannot be empty" />
		 		</div>
		 		<div  class="detail">
		 			<label for="zip">Pin Code</label>&nbsp;&nbsp;&nbsp;&nbsp;
		 			<input type="text" name="zip" id="zip" data-type="string" data-message="This field cannot be empty" />
		 		</div>
		 		<div  class="detail">
		 			<label for="country">Country</label>&nbsp;&nbsp;&nbsp;&nbsp;
		 			<select name="country" id="country" data-type="string" data-message="This field cannot be empty">
		 				<option value="">Select</option>
		 				<option value="IN">India</option>
		 			</select>
		 		</div>
		 	</fieldset>
		 	
		 	
		 	
		 	<p><input type="submit" id="submit-order" value="Submit" class="btn" /></p>
		 
		 </form>
	</div>
	

</div>

 <!-- footer section starts  -->

    

</body>
</php>	

    

