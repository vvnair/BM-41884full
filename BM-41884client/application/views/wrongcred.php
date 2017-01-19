<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
	$this->load->helper('url');
	?>

<!DOCTYPE html>

<html>


	<head> <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/boot1.css';?>">

	</head>

	<body>
	
	

				<div class="container-fluid hidden-sm hidden-xs">
					<div class="row row-this">
						<div class="col-md-offset-0 col-md-6 col-sm-offset-3 col-sm-4 col-lg-offset-0 col-lg-6 col-xs-offset-3 col-xs-4">
							<img class="image1" src="<?php echo base_url().'image/fbnew.jpg';?>">
							<button type="button" class="btn btn-md hidden-sm hidden-xs" id="signuptop"> Sign Up</button>
						</div>
						<div class="col-md-4 col-lg-4 hidden-sm hidden-xs visible-md visible-lg">
							
							
						</div>

					</div>

					<!--<div class="row hidden-md hidden-lg visible-sm visible-xs">


						<form id="small" action="facebook.php">
							<div class=" col-sm-12 col-xs-12 col-email">
								
								<input type="text" name="email" placeholder="Email" class=
								"form-control">
						
							</div>
							<div class="col-sm-12 col-xs-12 col-pwd">

								<input type="password" name="pwd" placeholder="Password" class=
								"form-control">
							</div>

							<div class=" col-sm-12- col-xs-12 col-btn">

								<button type="button" class="btn btn-primary" style="width: 100%">Log In</button>
							</div>
						</form>
					</div>-->
					<div class="row">
							<div class="col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6 box">

								<div class="row">
									<p id="fblogin"> <b>Facebook Login</b> </p>

								</div>
								<div class="row line">
									<hr>
								</div>
								<div class="row">
									<form action="<?php echo base_url().'/index.php/Facebook/fetch'?>" method="post">
									<div class="col-md-offset-0 col-md-4 col-lg-offset-0 col-lg-4 hidden-xs hidden-sm" align="right">
										<p id="login1">Login :</p>
										<p id="pass1">Password : </p>
									</div>

														
									<div class="col-md-6 col-lg-6 hidden-sm hidden-xs">
										
										<input type="text" name='email' class="boxlogin"><br>
										<input type="password" name='pwd' class="boxpass">
										
									</div><br>
									<div class="row keepme hidden-sm hidden-xs">
									<input type="checkbox"> Keep me logged in
								</div>
								<div class="bottomrow">
									<div class="row hidden-xs hidden-sm">
										<button type="submit" class="btn btn-primary btn-md btn3">Log In</button>
										<p class="signupnow">or <font color="blue">Sign Up on Facebook</font></p>

									</div>
									<div class="row forgot hidden-xs hidden-sm">
										<p>Forgot password?</p>
									</div>
								</div>
									</form>

								</div>

													


								
							</div>
						</div>
					</div>

			<!---mobile version here -->

								
				<div class="container-fluid hidden-md hidden-lg visible-sm visible-xs">

						<div class="row row-this">
								<div class="col-sm-12 col-xs-12">
									<img class="image1" src="<?php echo base_url().'image/fbnew.jpg';?>">
									<button type="button" class="btn btn-md hidden-sm hidden-xs" id="signuptop"> Sign Up</button>
								</div>
								
						</div>

						<div class="row bg">
							<div class="col-xs-12 col-sm-12 boxmob">

								<div class="row">
									<p id="fblogin"> <b>Facebook Login</b> </p>

								</div>
								<div class="row-line">
									<hr>
								</div>



								<div class="row">

									<div class="col-sm-12 col-xs-12 mob hidden-md hidden-lg">

												<div class="col-md-offset-0 col-md-4 col-lg-offset-0 col-lg-4 hidden-lg hidden-md">
													<p id="login2">Login :</p>
													<input type="text" name='email' class="boxlogg">
													
												</div>	
												<div class="col-md-offset-0 col-md-4 col-lg-offset-0 col-lg-4 hidden-lg hidden-md">

													<p id="pass2">Password : </p>
													<input type="password" name='pwd' class="boxpass2">
												</div>
												<div class="row keepme2">
												<input type="checkbox"> Keep me logged in
												</div>
												<div class="row">
													<button type="button" class="btn btn-primary btn-md btn5">Log In</button>
													<p class="signupnow1">or <font color="blue">Sign Up on Facebook</font></p>

												</div>
												<div class="row forgot1">
													<p>Forgot password?</p>
												</div>

										</div>

									</div>

								</div>
							</div>
					</div>





		

	</body>

</html>