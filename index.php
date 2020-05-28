<?php
session_start();
 ?>

<!DOCTYPE html>
<html>
<head><title>E-Store | BEST ONLINE MOBILE SHOPPING STORE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<style type="text/css">

</style>
</head>
<body style="font-family: Montserrat">
<?php
if(!isset($_SESSION['id'])){ 
	require 'header_logged_out.php';
	?>
  <div  class="container" style="margin-top: 60px;">
<b>
    <p>Hello &nbsp;&nbsp;guest &nbsp;&nbsp;Welcome to our E-Store,&nbsp;&nbsp;please <a data-toggle="modal" data-target="#pz" ><span></span> Login </a>/&nbsp;&nbsp;<a href="signup.php">signup</a> to access our services for you</p>
</b>
</div>
<div class="container" style="margin-top: 80px; margin-bottom: 100px">
	<div class="row row-style-login-page-pannel">
                <div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default  ">
				<div class="panel-heading">Mobile 1</div>
				<div class="panel-body">
                                       
                                        <center><img  class="img-responsive" src="images\phones\iphone11promax.jpg" height="205" >
					<b> Apple iphone 11 pro max <br></b>Price:22,500/-
                                        
                                        <a  data-toggle="modal" data-target="#pz" title="login to see full specification" ><span></span>specifications</a></center></center>
                                        
					<button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#pz">Order Now!</button>


				</div>
			</div>
		</div>	
                <div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">Mobile 2</div>
				<div class="panel-body" >
                                        <center><img  class="img-responsive" src="images\phones\minote9pro.jpg" height="205">
					<b> Xiomi note 9 pro <br></b>Price:56,000/-
                                        
                                        <a  data-toggle="modal" data-target="#pz" title="login to see full specification" ><span></span>specifications</a></center></center>
                                     
					<button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#pz">Order Now!</button>


				</div>
			</div>
		</div>	
		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default ">
				<div class="panel-heading">Mobile 3</div>
				<div class="panel-body">
					
                                    <center><img  class="img-responsive"  src="images\phones\oneplus7tpro.jpg" height="205">
					<b> One Plus 7T pro <br></b>
                                        Price:32,999/-
                                        <a  data-toggle="modal" data-target="#pz" title="login to see full specification" ><span></span>specifications</a></center>
                                    
					<button class="btn btn-primary form-control" type="button" value="Submit" data-toggle="modal" data-target="#pz" name="btn">Order Now!</button>


				</div>
			</div>
		</div>	

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default ">
				<div class="panel-heading">Mobile 4</div>
				<div class="panel-body">
					<center><img  class="img-responsive" src="images\phones\oppo f11.jpg">
					<b>oppo f11 pro <br></b>Price:78,459/-
                                      
                                        <a  data-toggle="modal" data-target="#pz" title="login to see full specification" ><span></span>specifications</a></center></center>
                                        
					<button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#pz">Order Now!</button>


				</div>
			</div>
		</div>
                <div class=" col-md-4 col-sm-6 col-xs-12 ">
			<div class="panel panel-default">
				<div class="panel-heading">Mobile 5</div>
				<div class="panel-body" >
					<center><img  class="img-responsive" src="images\phones\realme6pro.jpg">
					<b> Realme 6 pro  <br></b>Price:25,999/-
                                        
                                        <a  data-toggle="modal" data-target="#pz" title="login to see full specification" ><span></span>specifications</a></center></center>
                                        
					<button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#pz">Order Now!</button>


				</div>
			</div>
		</div>
		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default ">
				<div class="panel-heading">Mobile 6</div>
				<div class="panel-body" >
					<center><img  class="img-responsive" src="images\phones\vivos1pro.jpg">
					<b>vivo s1 pro<br></b>Price:44,500/-
                                       
                                        <a  data-toggle="modal" data-target="#pz" title="login to see full specification" ><span></span>specifications</a></center></center>
                                        
					<button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#pz">Order Now!</button>


				</div>
			</div>
		</div>	

		

			

		
	</div>
</div>


<div style="background-color: #333; color:white ;">
<?php require 'foot.php' ?>
</div>



<?php } else { 
	require 'header_logged_in.php'; 
?>

<div  class="container" style="margin-top: 60px;">
<b>

    <p>Hello &nbsp;&nbsp;&nbsp;<?php echo $_SESSION['name'] ?>&nbsp;&nbsp;&nbsp;welcome to our E-Store,&nbsp;&nbsp;We are here to provide you  the best services";</p>
 
</b>
</div>

<div class="container" style="margin-top: 50px; margin-bottom: 100px">
	<div class="row row-style-login-page-pannel">
                <div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"># 1</div>
				<div class="panel-body">
					<center><img  class="img-responsive" src="images\phones\iphone11promax.jpg">
                                            <b> Apple iphone 11 pro max<br><br></b>
                                            <b>Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹&nbsp;&nbsp;1,01,400/-<br><br></b></center>
                                        <b>specifications</b>
                                        <p>Brand &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Apple<br>
                                           Operating &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iOS<br>
                                           Screen size &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5.8 inches<br>
                                           Security &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Facial Recognition<br>
                                           Front camera &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12 MP<br>
                                           Rear camera &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12 MP</p>
					<button class="btn btn-primary form-control" title="click here to add this item in the cart" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>


				</div>
			</div>
		</div>
                <div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"># 2</div>
				<div class="panel-body" >
					
					<center><img  class="img-responsive" src="images\phones\minote9pro.jpg">
					<b> Redmi note 9 pro <br><br></b>
                                        <b>Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹&nbsp;&nbsp;19,999/-<br><br></b></center>
                                        <b>specifications</b>
                                        <p>Brand &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Xiomi<br>
                                           Operating &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Android<br>
                                           Screen size &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.67 inches<br>
                                           Security &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Facial Recognition<br>
                                           Front camera &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16 MP<br>
                                           Rear camera &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;48 MP Quad</p>
					<button class="btn btn-primary form-control" title="click here to add this item in the cart" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>


				</div>
			</div>
		</div>	
		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"># 3</div>
				<div class="panel-body">
					<center><img  class="img-responsive"  src="images\phones\oneplus7tpro.jpg">
					<b> One Plus 7T pro <br><br></b>
                                        <b>Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹&nbsp;&nbsp;58,999/-<br><br></b></center>
                                        <b>specifications</b>
                                        <p>Brand &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Oneplus<br>
                                           Operating &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Android<br>
                                           Screen size &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.7 inches<br>
                                           Security &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Facial Recognition<br>
                                           Front camera &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16 MP<br>
                                           Rear camera &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16 MP</p>
					<button class="btn btn-primary form-control" title="click here to add this item in the cart" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>


				</div>
			</div>
		</div>	

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"># 4</div>
				<div class="panel-body">
					<center><img  class="img-responsive" src="images\phones\oppo f11.jpg">
					<b>oppo f11 pro <br><br></b>
                                        <b>Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹&nbsp;&nbsp;21,990/-<br><br></b></center>
                                        <b>specifications</b>
                                        <p>Brand &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPPO<br>
                                           Operating &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Android<br>
                                           Screen size &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.5 inches<br>
                                           Security &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Facial Recognition<br>
                                           Front camera &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16 MP<br>
                                           Rear camera &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;48 MP</p>
					<button class="btn btn-primary form-control" title="click here to add this item in the cart" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>


				</div>
			</div>
		</div>
                <div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"># 5</div>
				<div class="panel-body" >
					<center><img  class="img-responsive" src="images\phones\realme6pro.jpg">
					<b>realme 6 pro <br><br></b>
                                        <b>Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹&nbsp;&nbsp;18,499/-<br><br></b></center>
                                        <b>specifications</b>
                                        <p>Brand &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Realme<br>
                                           Operating &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Android<br>
                                           Screen size &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.6 inches<br>
                                           Security &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Facial Recognition<br>
                                           Front camera &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16 MP dual<br>
                                           Rear camera &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64 MP Quad</p>
					<button class="btn btn-primary form-control" title="click here to add this item in the cart" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>


				</div>
			</div>
		</div>

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"># 6</div>
				<div class="panel-body" >
					<center><img  class="img-responsive" src="images\phones\vivos1pro.jpg">
					<b>vivo s1 pro <br><br></b>
                                        <b>Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹&nbsp;&nbsp;19,999/-<br><br></b></center>
                                        <b>specifications</b>
                                        <p>Brand &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VIVO<br>
                                           Operating &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Android<br>
                                           Screen size &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.4 inches<br>
                                           Security &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Facial Recognition<br>
                                           Front camera &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32 MP<br>
                                           Rear camera &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;48 MP Quad</p>
					<button class="btn btn-primary form-control" title="click here to add this item in the cart" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>


				</div>
			</div>
		</div>	

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"># 7</div>
				<div class="panel-body" >
					<center><img  class="img-responsive" src="images\phones\Motorolaedgeplus.jpg">
					<b>Motorola edge plus <br><br></b>
                                        <b>Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹&nbsp;&nbsp;74,999/-<br><br></b></center>
                                        <b>specifications</b>
                                        <p>Brand &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Motorola<br>
                                           Operating &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Android<br>
                                           Screen size &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.7 inches<br>
                                           Security &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Facial Recognition<br>
                                           Front camera &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;25 MP<br>
                                           Rear camera &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;108 MP triple</p>
                                        
					<button class="btn btn-primary form-control" title="click here to add this item in the cart" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>


				</div>
			</div>
		</div>
                <div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"># 8</div>
				<div class="panel-body" >
					<center><img  class="img-responsive" src="images\phones\nokia9.jpg">
					<b>nokia 9<br><br></b>
                                        <b>Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹&nbsp;&nbsp;36,899/-<br><br></b></center>
                                        <b>specifications</b>
                                        <p>Brand &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nokia<br>
                                           Operating &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Android<br>
                                           Screen size &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5.99 inches<br>
                                           Security &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Facial Recognition<br>
                                           Front camera &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;20 MP<br>
                                           Rear camera &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;20 MP penta</p>
					<button class="btn btn-primary form-control" title="click here to add this item in the cart" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>


				</div>
			</div>
		</div>
                <div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"># 9</div>
				<div class="panel-body" >
                                    <center><img  class="img-responsive" src="images\phones\samsunggalays20.jpg">
                                        <b>samsung galaxy s20<br><br></b>
                                        <b>Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹&nbsp;&nbsp;77,999/-<br><br></b></center>
                                        <b>specifications</b>
                                        <p>Brand &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Samsung<br>
                                           Operating &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Android<br>
                                           Screen size &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.7 inches<br>
                                           Security &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Facial Recognition<br>
                                           Front camera &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;40 MP<br>
                                           Rear camera &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;108 MP Quad</p>
                                        
                                        <button class="btn btn-primary form-control" title="click here to add this item in the cart" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>


				</div>
			</div>
		</div>	

			

		
	</div>
</div>

<?php } ?>

<?php require 'login_modal.php'; ?>
<?php require 'add_to_cart.php'; ?>


</body>
</html>

