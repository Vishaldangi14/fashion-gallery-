<?php 
include('config.php');
// <--Insert and Update Code-->
if(isset($_POST['submit']))
{
$name=$_POST['fname'];
$gen=$_POST['gen'];
$age=$_POST['age'];
$city=$_POST['city'];
$state=$_POST['state'];
$address=$_POST['address'];
$contact=$_POST['contact'];

$email=$_POST['semail'];



$img=$_FILES['img']['name'];
$path="upload/".time().$img;
move_uploaded_file($_FILES['img']['tmp_name'],$path );


$check=$db->get_var("select count(*) from model_reg where semail='$email'");
					if($check>0)
					{
					echo "<script>alert('This Email-Id Already Exist!!! Try New Id...')</script>";
					}
					else
					{
					
					$query="insert into model_reg values('$name','$gen','$age','$state','$city','$address','$contact','$email','$path')";
						$result=$db->query($query);
							if($result)
								echo "<script>alert('Your Registration is Successful!!!')</script>";
							else
								echo "<script>alert('Sorry')</script>";
					}
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
.page
{width: 100%;
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
				<li><a href="hlogin.php">Login</a></li>
		<li><a href="designer_reg.php">Designer Registration</a></li>
		<li class="current_page_item"><a href="model_reg.php">Model Registration</a></li>
				
			</ul>
		</div>
	</div>
	<div id="logo" class="container">
			<h1><a href="#" style="text-transform:uppercase;">EXODESIGN</a></h1>
	
		<p>Designer Registration Form</p>
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
			<form method="post" enctype="multipart/form-data" >
			<label for="fname">Name</label>
  <input type="text" id="fname" name="fname">
  	<label for="fname">Gender</label>
  <select class="page" name="gen">
  <option>--Select Gender--</option>
  <option value="male">Male</option>
  <option value="female">Female</option>
  </select>
  <label for="fname">Age Category</label>
  <select class="page" name="age">
  <option>--Select Age Category--</option>


  <option value="18-24">18-24</option>
  <option value="25-40">25-40</option>
  <option value=">40">>40</option>
  </select>
<label for="fname">state</label>
  <input type="text" id="fname" name="state">
  <label for="fname">City</label>
  <input type="text" id="fname" name="city">
  <label for="fname">Address</label>
  <textarea placeholder="Enter Address" class="page" name="address"></textarea>
  <label for="fname">Contact</label>
  <input type="text" id="fname" name="contact">
 
  <label for="fname">Email-Id</label>
  <input type="text" id="fname" name="semail">
  <label for="lname">Password</label>
  <input type="text" id="lname" name="spass">
  
   <label for="lname">Upload your Picture</label>
  <input type="file" name="img">
  
  <input type="submit" name="submit" value="Register" class="button button2"> 
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
		<p>© 2018 Untitled Inc. All rights reserved. Design and Devloped by Akshay Jain</a>.</p></div></div>
<!-- end #footer -->
</body>
</html>
