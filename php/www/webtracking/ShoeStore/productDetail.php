<?php

$strMobileId = $_POST["hdnMobileId"];
$strMobileName = $_POST["hdnMobileName"];
$strGuid = $_POST["hdnGuid"];

?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>Shoestore Website </title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="Mobilestore iphone, Android and Smartphones" />
		<link href='http://fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
		<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
		<script src="js/jqzoom.pack.1.0.1.js" type="text/javascript"></script>
		<link rel="stylesheet" href="css/jqzoom.css" type="text/css">
		<script type="text/javascript">
			$(function() {
				$(".jqzoom").jqzoom();
			});
		</script>
		<script>
		$(document).ready(function(){
			$(".menu_body").hide();
			//toggle the componenet with class menu_body
			$(".menu_head").click(function(){
				$(this).next(".menu_body").slideToggle(600); 
				var plusmin;
				plusmin = $(this).children(".plusminus").text();
				
				if( plusmin == '+')
				$(this).children(".plusminus").text('-');
				else
				$(this).children(".plusminus").text('+');
			});
		});
		</script>
	</head>
	<body>
		<div class="wrap">
		<!----start-Header---->
		<div class="header">			
			<div class="clear"> </div>
			<div class="header-top-nav">				
				
			</div>
			<div class="clear"> </div>
		</div>
		</div>
		<div class="clear"> </div>
		<div class="top-header">
			<div class="wrap">
		<!----start-logo---->
			<div class="logo">
				<a href="index.html"><img src="images/logo.png" title="logo" /></a>
			</div>
		<!----end-logo---->
		<!----start-top-nav---->
		<div class="top-nav">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="index.html">About</a></li>
				<li><a href="index.html">Store</a></li>
				<li><a href="index.html">Featured</a></li>
				<li><a href="index.html">Blog</a></li>
				<li><a href="index.html">Contact</a></li>
			</ul>
		</div>
		<div class="clear"> </div>
		</div>
		</div>
		<!----End-top-nav---->
		<!----End-Header---->
		    <div class="clear"> </div>
		    <div class="wrap">
		    <div class="content">
		    <div class="content-grids">
		    	<div class="details-page">
		    		<div class="back-links">
		    			<ul>
		    				<li><a href="#">Home</a><img src="images/arrow.png" alt=""></li>
		    				<li><a href="#">Product</a><img src="images/arrow.png" alt=""></li>
		    				<li><a href="#">Product-Details</a><img src="images/arrow.png" alt=""></li>
		    			</ul>
		    		</div>
		    	</div>
		    	<div class="detalis-image">
		    		<div id="content"> <a href="images/<?php echo $strMobileId ?>.jpg" class="jqzoom" style="" title="<?php echo $strMobileName ?>"> <img src="images/<?php echo $strMobileId ?>.jpg"  title="Product-Name" style="border: 1px solid #e5e5e5;"> </a>
					</div>
		    	</div>
		    	<div class="detalis-image-details">
		    		
		    		<div class="brand-value">
		    			<h3>Product-Complete Details With Value</h3>
		    			<div class="left-value-details">
			    			<ul>
			    				<li>Price:</li>
			    				<li><span>$350</span></li>
			    				<li><h5>$250</h5></li>
			    				<br />
			    				<li><p>Not rated</p></li>
			    			</ul>
		    			</div>
		    			<div class="right-value-details">
			    			<a href="#">Instock</a>
			    			<p>No reviews</p>
		    			</div>
		    			<div class="clear"> </div>
		    		</div>
		    		<div class="brand-history">
		    			<h3>Description :</h3>
		    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
		    			<a href="#">Addcart</a>
		    		</div>		    		
		    		<div class="clear"> </div>
		    		
		    		</div>
		    		<div class="clear"> </div>
		    	<div class="menu_container">
						<p class="menu_head">Lorem Ipsum<span class="plusminus">+</span></p>
							<div class="menu_body" style="display: none;">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
							</div>
						<p class="menu_head">About Product<span class="plusminus">+</span></p>
							<div class="menu_body" style="display: none;">
							<p>The <?php echo $strMobileName ?> is a best smartphone ever designed by any company.?></p>
							</div>
					</div>
			</div>
			
		    	</div>		    	
		    </div>
		    <div class="clear"> 
				<img width="1" height="1" src="http://www.wtlabadserver.com/track.php?guid=<?php echo $strGuid ?>"  />
			</div>
		    
		<div class="footer">
			<div class="wrap">
			<div class="section group">
				<div class="col_1_of_4 span_1_of_4">
					<h3>Our Info</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3>Latest-News</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3>Store Location</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					<h3>Order-online</h3>
					<p>080-1234-56789</p>
					<p>080-1234-56780</p>
				</div>
				
			</div>
		</div>
		</div>
	</body>
</html>

