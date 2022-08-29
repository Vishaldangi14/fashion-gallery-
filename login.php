<?php
session_start();
include('config.php');
$email=$_POST['semail'];
$pass=$_POST['spass'];

$check=$db->get_var("select count(*) from admin where aemail='$email' and apass='$pass'");
	if($check==0)
	{

	$check1=$db->get_var("select count(*) from designer_reg where semail='$email' and spass='$pass' and status='ACTIVE'");
          if($check1 == 0)
            {
              
					unset($_SESSION['email']);
					header('location:hlogin.php?err=Invalid Username or Password');
			}
                else
                {
					
                    $_SESSION['email'] = $email;
                   
					header('location:designer/upload_design.php');
                }

           
    }
        else
        {

           $_SESSION["email"] = $email;
                  
           header('location:Admin/request.php');
		 
        }



?>