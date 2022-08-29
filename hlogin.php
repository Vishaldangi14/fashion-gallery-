<?php

if(isset($_GET['err']))
{
	echo "<script>alert('Invalid Email-Id or Password')</script>";
	
	
}




?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>EXODESIGN</title>
<link href="http://fonts.googleapis.com/css?family=Oxygen:400,700,300" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<style>
input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
}

.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #008CBA;
}
</style>
</head>
<body>
<div id="wrapper">
	<div id="menu-wrapper">
		<div id="menu" class="container">
			<ul>
				<li ><a href="index.php">Home</a></li>
				<li class="current_page_item"><a href="hlogin.php">Login</a></li>
		<li><a href="designer_reg.php">Designer Registration</a></li>
		<li><a href="model_reg.php">Model Registration</a></li>
				
			</ul>
		</div>
	</div>
	<div id="logo" class="container">
			<h1><a href="#" style="text-transform:uppercase;">Fashion Gallery</a></h1><br><br><br>
		<p>Login Here</p>
	</div>
	<div id="page" class="container">
		<div>
			<div class="entry">
			</div>
		</div>
	</div>
	<div id="three-column" class="container">
		<div class="tbox1">
			<div class="box-style box-style01">
				<div class="content" style="background-color:#f1f2e9;">
					
				</div>
			</div>
		</div>
		<div class="tbox2">
			<div class="box-style box-style02">
				<div class="content">
			<form method="post" action="login.php">
  <label for="fname">Email-Id</label>
  <input type="text" id="fname" name="semail">
  <label for="lname">Password</label><br>
  <input type="password"  id="lname" name="spass" style="width: 100%; padding: 12px 20px;margin: 8px 0;box-sizing: border-box;" ><br>
  <button class="button button2">LOGIN</button>
</form>

			</div>
			</div>
		</div>
		<div class="tbox3">
			<div class="box-style box-style03">
				<div class="content" style="background-color:#f1f2e9;">
					
				</div>
			</div>
		</div>
	</div>
	
</div>
<div id="footer">
	<p>© 2018 Untitled Inc. All rights reserved. Design and Devloped by Akshay Jain</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>
