<?php
include('config.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Fashion Gallery</title>
<link href="http://fonts.googleapis.com/css?family=Oxygen:400,700,300" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
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
		<h1><a href="#" style="text-transform:uppercase;">Fashion Gallery</a></h1>
		<p>In order to be irreplaceable one must always be DIFFERENT.</p>
	</div>
	<div id="page" class="container">
		<div>
			<div class="entry">
				<p></p>
			</div>
		</div>
	</div>
		
	<div id="three-column" class="container">
		
		<?php
								   $result=$db->get_results("select * from design where d_cat='Male'");
								
								
									if($result)
									{
									foreach ( $result as $res )
									{	
										$photo=$res->d_photo;	
		
                           
                        $eid=$res->des_email;	
						$link="detail.php?a=".$eid;
								
		?>
		
		
		

		
		
		

		<div class="tbox" style="float:left">
			<div class="box-style box-style">
				<div class="content">
					<div class="image">
					<a href="<?php echo $link;?>" ><img src="<?php echo 'designer/'.$photo ?> " width="210" height="300"  /></a></div>
					<h2><?php echo "$res->d_title" ?></h2>
					<p><?php echo "$res->d_desc" ?> </p>
					<a href="<?php echo $link;?>" class="button"><?php echo "$res->d_cost" ?> </a>
				</div>
			</div>
		</div>

		
	
	
	
	
									<?php
				}
									
									}
									?>
	
	</div>
	
	<div id="three-column" class="container">
		<?php
								   $result=$db->get_results("select * from design where d_cat='Female'");
									
								
									if($result)
									{
									foreach ( $result as $res )
									{	
										$photo=$res->d_photo;	
		
                           
                       $eid=$res->des_email;	
						$link="detail.php?a=".$eid;
								
		?>
		
		
		

		
		
		

		<div class="tbox" style="float:left">
			<div class="box-style box-style">
				<div class="content">
					<div class="image">
					<a href="<?php echo $link;?>" ><img src="<?php echo 'designer/'.$photo ?> " width="210" height="300"  /></a></div>
					<h2><?php echo "$res->d_title" ?></h2>
					<p><?php echo "$res->d_desc" ?> </p>
					<a href="<?php echo $link;?>" class="button"><?php echo "$res->d_cost" ?> </a>
				</div>
			</div>
		</div>

		
		

	
	
	
									<?php
									}
									}
									?>
										</div>
	
	
</div>
<div id="footer">
	<p>© 2018 Untitled Inc. All rights reserved. Design and Devloped by Akshay Jain</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>
