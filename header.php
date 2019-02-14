<?php session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<!--
---- Clean html template by http://WpFreeware.com
---- This is the main file (index.html).
---- You are allowed to change anything you like. Find out more Awesome Templates @ wpfreeware.com

-->	


	<head>
		<title>Welcome to my site</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- bx slider-->
		<link rel="stylesheet" href="css/jquery.bxslider.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<!-- Fonts-->
		<link rel="stylesheet" href="fonts/HelveticaNeue/font.css">
		<link rel="stylesheet" href="fonts/Bebas/font.css">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link href="style.css" rel="stylesheet" media="screen">	
		<link href="responsive.css" rel="stylesheet" media="screen">		
	</head>

	<body>
		<div class="fix column">
			<div class="fix header">
				<div class="fix logo floatleft">
					<a href=""><h1>BMDB</h1></a>
				</div>
				<div class="fix searchform floatright">
					<form action="search.php" method="GET">
                                            <p><input type="text" style="color: black" placeholder="Search videos" class="search" name="name"/>
                                                    <input type="submit" value="search" class="submit"/></p>
					</form>
				</div>
			</div>
			<div class="menu ">
				<ul id="nav" class="lft">
					<li><a href="index.php">Home</a></li>
					<li><a href="">Categories</a>
						<ul>
							<li><a href="">Action</a></li>
							<li><a href="">Romantic</a></li>
							<li><a href="">Comedy</a></li>
							<li><a href="">Horror</a></li>
							<li><a href="">Tragedy</a></li>
							<li><a href="">Biographical</a></li>
						</ul>
					</li>
					<li><a href="">Classic Movie</a>
                                            <ul>
							<li><a href="">1950-60</a></li>
							<li><a href="">1960-70</a></li>
							<li><a href="">1970-80</a></li>
							
						</ul>
                                        </li>
					<li><a href="">New</a>
						<ul>
							<li><a href="">Action</a></li>
							<li><a href="">Romantic</a></li>
							<li><a href="">Comedy</a></li>
							<li><a href="">Horror</a></li>
							<li><a href="">Tragedy</a></li>
							<li><a href="">Biographical</a></li>
						</ul>
					</li>
					<li><a href="">Old</a>
                                            <ul>
							<li><a href="">Action</a></li>
							<li><a href="">Romantic</a></li>
							<li><a href="">Comedy</a></li>
							<li><a href="">Horror</a></li>
							<li><a href="">Tragedy</a></li>
							<li><a href="">Biographical</a></li>
						</ul>
                                        </li>
					<li><a href="">Popular</a>
                                            <ul>
							<li><a href="">Action</a></li>
							<li><a href="">Romantic</a></li>
							<li><a href="">Comedy</a></li>
							<li><a href="">Horror</a></li>
							<li><a href="">Tragedy</a></li>
							<li><a href="">Biographical</a></li>
						</ul>
                                        </li>
				</ul>
				<ul id="nav" class="rgt">
				    <?php 
   //echo $_SESSION["uid"];
   if(isset($_SESSION['uid']))
   {
	   ?>
  <li> <a href="logout.php">LOG OUT</a></li>
   <?php }
   else 
   {
	  ?>
	  <li><a href="enter.php">LOG IN</a></li>
	  <li><a href="sign.php">Register</a></li>
<?php	  
	   
   }
   ?>
				
				</ul>
				
			</div>
			