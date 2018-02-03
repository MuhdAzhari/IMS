<?php
session_start();
if(isset($_SESSION['username'])) {
    if($_SESSION['usertype'] =='admin') // if session variable "username" does not exist.
	header("location:dashboard.php"); // Re-direct to index.php
}
?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login to Control Panel</title>
	
	<!-- Stylesheets -->
	
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="js/lib/validationEngine.jquery.css">
	
	<!-- Scripts -->
	<script src="js/lib/jquery.min.js" type="text/javascript"></script>
	<script src="js/lib/jquery.validate.min.js" type="text/javascript"></script>
	
	<script>
	/*$.validator.setDefaults({
		submitHandler: function() { alert("submitted!"); }
	});*/
	
	$(document).ready(function() {
		
		// validate signup form on keyup and submit
		$("#login-form").validate({
			rules: {
				username: {
					required: true,
					minlength: 3
				},
				password: {
					required: true,
					minlength: 3
				}
			},
			messages: {
				username: {
					required: "Please enter a username",
					minlength: "Your username must consist of at least 3 characters"
				},
				password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 3 characters long"
				}
			}
		});
	
	});

	</script>

	<!-- Optimize for mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>  
</head>
<body>


	<!-- TOP BAR -->
	<div id="top-bar">
		
		<div class="page-full-width">
		
			<!--<a href="#" class="round button dark ic-left-arrow image-left ">See shortcuts</a>-->

		</div> <!-- end full-width -->	
	
	</div> 
	<!-- end top-bar -->
	
	
	
	<!-- HEADER -->
	<div id="header">
		
		<div class="page-full-width cf">
		

    
			<!-- Change this image to your own company's logo -->
			<!-- The logo will automatically be resized to 39px height. -->
			<center><a href="#"  target="blank"><img style="width:50%; height:auto;" src="<?php echo "upload/ims_perak.png"; ?>" alt="IMS" /></a> </center><!--Kene check 25/1/2018/-->
			
		</div> <!-- end full-width -->	

	</div> <!-- end header -->
	
        <center><h1 style=" font-family: Georgia; font-weight: bold; font-size:20px; color: #0000000000">Inventory Management System (IMS) &nbsp;&nbsp;&nbsp;</h1></center>
	
	<!-- MAIN CONTENT -->

	<div id="content">

		<form action="checklogin.php" method="POST" id="login-form" class="cmxform" autocomplete="off">
		
			<fieldset>
				<p> <?php 
				
				if(isset($_REQUEST['msg']) && isset($_REQUEST['type']) ) {
					
					if($_REQUEST['type'] == "error")
						$msg = "<div class='error-box round'>".$_REQUEST['msg']."</div>";
					else if($_REQUEST['type'] == "warning")
						$msg = "<div class='warning-box round'>".$_REQUEST['msg']."</div>"; 
					else if($_REQUEST['type'] == "confirmation")
						$msg = "<div class='confirmation-box round'>".$_REQUEST['msg']."</div>"; 
					else if($_REQUEST['type'] == "information")
						$msg = "<div class='information-box round'>".$_REQUEST['msg']."</div>"; 	
						
					echo $msg;						
				}
				?>
				</p>
				
				<p>
                <b><label style="text-transform: capitalize;">Username</label></b>
                <input type="text" id="login-username" class="round full-width-input" placeholder="Enter Username" name="username" autofocus  />
				</p>

				<p>
                 <b><label style="text-transform: capitalize;">Password</label></b>
                <input type="password" id="login-password" name="password" placeholder="Enter Password" class="round full-width-input"  />
				</p>
				
                <a href="forget_pass.php" class="button ">Forgot your password?</a>
				&nbsp;
				&nbsp;
				&nbsp;
				<input type="submit" class="button round blue image-right ic-right-arrow" name="submit" value="LOG IN" />
			</fieldset>

			<br/>
                        
                </form>
	</div> <!-- end content -->
	<!-- FOOTER -->
	<div id="footer">
<p> &copy;Copyright 2018 TSSC</p>

	</div> <!-- end footer -->
        
       
</body>
</html>