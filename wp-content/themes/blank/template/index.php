
<?php

/* Template Name: HOME */

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap" rel="stylesheet"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/wordpress/wp-content/themes/blank/template/index.css">
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="header">
		<div class="logo-cont">
		<img src="http://localhost/wordpress/wp-content/uploads/2021/06/logo.png" class="logo">
		</div>
		<div class="search-cont">
		<form action="">
		  <input type="search" class="searchbar" placeholder="Search products...">
		  <i class="fa fa-search"></i>
		</form>
		</div>
		<div class="cart-cont">
			<input type="submit" name="" class="cart" value="CART">
			<i class="fas fa-shopping-cart"></i>
		</div>
	</div>
	<div class="nav">
		<div class="login">
		<a href="#login" class="loginbtn">LOG-IN</a>
		<a href="#register" class="registerbtn">SIGNUP</a>
		</div>
		<div class="home">
		<a href="index.php" class="homebtn">HOME</a>
		</div>
		<div class="dropdown">
			<div class="category">
				<button class="cat-dropdownbtn">CATEGORY<i class="fa fa-caret-down"></i></button>
				<div class="catdropdown-contents">
					<a href="#1">MOTORCYCLE HELMET</a>
	      			<a href="#2">BICYCLE HELMET</a>
	      			<a href="#3">OTHERS</a>
				</div>
			</div>
		</div>
		<div class="dropdown2">
			<div class="brand">
				<button class="brand-dropdownbtn">BRANDS<i class="fa fa-caret-down"></i></button>
				<div class="branddropdown-contents">
					<a href="#4">BRAND 1</a>
		      		<a href="#5">BRAND 2</a>
		      		<a href="#6">BRAND 3</a>
				</div>
			</div>
		</div>
		<div class="dropdown3">
			<div class="aboutus">
				<button class="about-dropdownbtn">ABOUTUS<i class="fa fa-caret-down"></i></button>
				<div class="aboutdropdown-contents">
					<a href="aboutus.php">COMPANY INFO</a>
		      		<a href="contact.php">CONTACT</a>
		      		<a href="#9">SOCIAL MEDIA</a>
				</div>
			</div>
		</div>
		<div class="news">
		<a href="#news" class="newsbtn">NEWS</a>
		</div>
	</div>
	<div class="main">
		<div class="mySlides fade">
		  	<div class="numbertext">1 / 6</div>
		  	<img src="http://localhost/wordpress/wp-content/uploads/2021/06/helmet1.png" style="width:100%; height: 520px;">
		  	<div class="text"></div>
		</div>
		<div class="mySlides fade">
		  	<div class="numbertext">2 / 6</div>
		  	<img src="http://localhost/wordpress/wp-content/uploads/2021/06/helmet2.jpg" style="width:100%; height: 520px;">
		  	<div class="text"></div>
		</div>
		<div class="mySlides fade">
		  	<div class="numbertext">3 / 6</div>
		  	<img src="http://localhost/wordpress/wp-content/uploads/2021/06/helmet3.jpg" style="width:100%; height: 520px;">
		  	<div class="text"></div>
		</div>
		<div class="mySlides fade">
		  	<div class="numbertext">4 / 6</div>
		  	<img src="http://localhost/wordpress/wp-content/uploads/2021/06/helmet4.jpg" style="width:100%; height: 520px;">
		  	<div class="text"></div>
		</div>
		<div class="mySlides fade">
		  	<div class="numbertext">5 / 6</div>
		  	<img src="http://localhost/wordpress/wp-content/uploads/2021/06/helmet5.jpg" style="width:100%; height: 520px;">
		  	<div class="text"></div>
		</div>
		<div class="mySlides fade">
		  	<div class="numbertext">6 / 6</div>
		  	<img src="http://localhost/wordpress/wp-content/uploads/2021/06/helmet6.jpg" style="width:100%; height: 520px;">
		  	<div class="text"></div>
		</div>
	</div>
<br>
	<div style="text-align:center; position: relative; margin-top: 780px;">
	  	<span class="dot"></span> 
	  	<span class="dot"></span> 
	  	<span class="dot"></span>
	  	<span class="dot"></span> 
	  	<span class="dot"></span> 
	  	<span class="dot"></span>  
	</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="footer">
		<p class="footer-content">
			© 2021 TU Takip Ulo
		</p>
		<p>
			Follow us on social media platforms.
		</p>
		<img src="http://localhost/wordpress/wp-content/uploads/2021/06/logo.png" style="width: 150px; position: absolute;">
		<img src="http://localhost/wordpress/wp-content/uploads/2021/06/facebook.png" class="fb">
		<img src="http://localhost/wordpress/wp-content/uploads/2021/06/twitter.png" class="tw">
		<img src="http://localhost/wordpress/wp-content/uploads/2021/06/instagram.png" class="ig">
</div>

<script src="http://localhost/wordpress/wp-content/themes/blank/template/slides.js"></script>
</body>
</html>