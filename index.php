<!DOCTYPE>

<?php 
session_start();
include("functions/functions.php");

?>
<html>
	<head>
		<title>MAGATO SHOP</title>
		
		
	<link rel="stylesheet" href="styles/style.css" media="all" /> 
	</head>
	
<body>
    
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-81901610-1', 'auto');
  ga('send', 'pageview');

</script>
    
	<!--Main Container starts here-->
	<div class="main_wrapper">
	
		<!--Header starts here-->
		<div class="header_wrapper">
		
			<a href="index.php"><img id="logo" src="images/logo.gif" /> </a>
			<img id="banner" src="images/ad_banner.gif" />
		</div>
		<!--Header ends here-->
		
		<!--Navigation Bar starts-->
		<div class="menubar">
			
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="all_products.php">All Products</a></li>
				<li><a href="customer/my_account.php">My Account</a></li>
				<li><a href="#">Sign Up</a></li>
				<li><a href="cart.php">Shopping Cart</a></li>
				<li><a href="contact.html">Contact Us</a></li>
			
			</ul>
			
			<div id="form">
				<form method="get" action="results.php" enctype="multipart/form-data">
					<input type="text" name="user_query" placeholder="Search a Product"/ > 
					<input type="submit" name="search" value="Search" />
				</form>
			
			</div>
		
            
            <!--Navigation Bar ends-->
	
		    <!--Content wrapper starts-->
		<div class="content_wrapper">
		
			<div id="sidebar">
			
			<div id="sidebar_title">Categories</div>
				
				<ul id="cats">
                    
				<?php getCats(); ?>
                    
				<ul>
					
				<div id="sidebar_title">Type</div>
				
				<ul id="cats">
					
				<?php getTypes(); ?>
				
				<ul>
			</div>
		
			<div id="content_area">
                
			<?php cart(); ?>
			
			<div id="shopping_cart"> 
					
					<span style="float:right; font-size:17px; padding:5px; line-height:40px;">
					
					<?php 
					if(isset($_SESSION['customer_email'])){
					echo "<b>Welcome:</b>" . $_SESSION['customer_email'] . "<b style='color:#79c2c9;'>Your</b>" ;
					}
					else {
					echo "<b>Welcome Guest:</b>";
					}
					?>
					
					<b style="color:#79c2c9">Shopping Cart -</b> Total Items: <?php total_items();?> Total Price: <?php total_price(); ?> <a href="cart.php" style="color:#79c2c9">Go to Cart</a>
					
					
					<?php 
					if(!isset($_SESSION['customer_email'])){
					
					echo "<a href='checkout.php' style='color:orange;'>Login</a>";
					
					}
					else {
					echo "<a href='logout.php' style='color:orange;'>Logout</a>";
					}
					
					
					
					?>
					
					
					
					</span>
			</div>
			
				<div id="products_box">
				
				<?php getPro(); ?>
				<?php getCatPro(); ?>
				<?php getTypePro(); ?>
				
				</div>
			
			</div>
			
		</div>
		  
                    <!--Content wrapper ends-->
		
	
		
		<div id="footer">
		
		<h2 style="text-align:center; padding-top:30px;">&copy; 2016 STUDIO MAGATO</h2>
		
		</div>
	
	
	
	
	
	
	</div> 
    </div>
<!--Main Container ends here-->


</body>
</html>