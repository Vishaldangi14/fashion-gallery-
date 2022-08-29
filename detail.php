<?php 
include('config.php');
// <--Insert and Update Code-->

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
				<li class="current_page_item"><a href="index.php">Home</a></li>
				<li><a href="hlogin.php">Login</a></li>
		<li><a href="designer_reg.php">Designer Registration</a></li>
		<li><a href="model_reg.php">Model Registration</a></li>
				
			</ul>
		</div>
	</div>
	<div id="logo" class="container">
			<h1><a href="#" style="text-transform:uppercase;">EXODESIGN</a></h1>
	
		<p>Designer Detail</p>
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
		
		<?php
		
		
		if(isset($_GET['a']))
		{
		
		$email=$_GET['a'];
		
		  $result=$db->get_results("select * from designer_reg where semail='$email'");
									
								
									if($result)
									{
									foreach ( $result as $res )
									{	
									
		
		
		?>
								 
		
		
			<label for="fname">Designer Name</label>
  <input type="text" id="fname" name="fname" value="<?php echo $res->sname?>" readonly>
  	<label for="fname">Gender</label>
   <input type="text" id="fname" name="fname" value="<?php echo $res->sgender?>" readonly>
  
  
  
<label for="fname">state</label>
  <input type="text" id="fname" name="state" value="<?php echo $res->state?>" readonly>
  <label for="fname">City</label>
  <input type="text" id="fname" name="city" value="<?php echo $res->city?>" readonly>
  <label for="fname">Address</label>
  <textarea placeholder="Enter Address" class="page" name="address" readonly><?php echo $res->address?></textarea>
  <label for="fname">Contact</label>
  <input type="text" id="fname" name="contact" readonly value="<?php echo $res->contact?>">
  <label for="fname">Boutique Name</label>
  <input type="text" id="fname" name="b_name" readonly value="<?php echo $res->b_name?>">
  <label for="fname">Boutique Address</label>
  <input type="text" id="fname" name="b_address" readonly value="<?php echo $res->b_address?>">
  <label for="fname">Email-Id</label>
  <input type="text" id="fname" name="semail" readonly value="<?php echo $res->semail?>">
 
<?php
									}
									}
		}
									?>
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
	<p>© 2013 Untitled Inc. All rights reserved. Lorem ipsum dolor sit amet nullam blandit consequat phasellus etiam lorem. Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.  Photos by <a href="http://fotogrph.com/">Fotogrph</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>
