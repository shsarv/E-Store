<?php

if (isset($_SESSION['email'])) {
    header('location: index.php');
}
?>




<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<style type="text/css">
	

</style>
</head>
<body>

<?php 
require 'header_logged_out.php';
if(!isset($SESSION['id'])){ 
	require 'header_logged_out.php'
 ?>

<div class="container"> 
<div class=" row" style="margin-top: 80px;">
	<div class="col-sm-7 col-xs-12">
            <a href="signup.php">
                    <img class="img-responsive" alt="img" src="images\signuppic.jpg">
                </a>
	</div>


	<div class="  col-sm-5 col-xs-12 " style="margin-bottom: 100px; border:1px solid blue">
            
                <h2 style=" background-color:blue;color:white; border: 4px solid blue" ><strong> SIGN UP</strong> </h2>
            
		<form method="POST" action="sign.php">
			<div><?php ?></div>
						<div class="form-group">
							<input type="text" class="form-control" name="name" placeholder="Name" required="true" pattern=".{1,}">
						</div>

						<div class="form-group">
							<input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
							<div><?php ?></div>
							<div><?php ?></div>
						</div>

						<div class="form-group">	
							<input type="Password" class="form-control" name="password" placeholder="Password" required="true" pattern=".{1,}">
						</div>

						<div class="form-group">
							<input type="text" class="form-control" name="contact" placeholder="Contact" required="true" pattern=".{10}">
							<div><?php  ?></div>
						</div>

						<div class="form-group">
							<input type="text" class="form-control" name="city" placeholder="City" required="true" pattern=".{1,}">
						</div>

						<div class="form-group">
							<input type="text" class="form-control" name="address" placeholder="Address" required="true" pattern=".{1,}">
						</div>

						<div>
							<button class="btn btn-primary" type="submit" value="Submit"  name="button">Submit</button>						
						</div>
                                                
		</form>
		<br><p>Aleady Registered? <a data-toggle="modal" data-target="#pz">Login</a> </p>
	</div>
</div> 
</div>

<?php require 'login_modal.php'; ?>

<?php } ?>

<div style="background-color: #333; color:white ;">
<?php require 'foot.php' ?>
</div>
</body>
</html>



