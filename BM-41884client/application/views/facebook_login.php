<!--BM-41884 -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>

	<head> <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/boot.css">

	<script type="text/javascript">
		
		

	</script>

	<style type="text/css">
	.uploadbtn {
		margin-left: -60px;
		margin-top: -10px;	


	}

	#up {

		padding-top: 10px;
		padding-left: 53px;
	}

	</style>

	</head>

	<body>
	<?php
	$this->load->helper('url');
	?>

		<div class="container-fluid">
			<div class="row row-this">
				<div class="col-md-offset-0 col-md-6 col-sm-offset-3 col-sm-4 col-lg-offset-0 col-lg-6 col-xs-offset-3 col-xs-4">
					<img src="image/fb.png">
				</div>
				<div class="col-md-offset-2 col-md-4 col-lg-offset-2 col-lg-4 hidden-sm hidden-xs visible-md visible-lg">
					<form method="post" action="<?php echo base_url().'/index.php/Facebook/fetch'?>">
						<input type="text" name="email" placeholder="Email">
				
						<input type="password" name="pwd" placeholder="Password" >
						<button type="submit" class="btn btn-primary">Log In</button>
					</form>
				</div>

			</div>

			<div class="row hidden-md hidden-lg visible-sm visible-xs">


				<form id="small" method="post" action="<?php echo base_url().'/index.php/Facebook/fetch'?>">
					<div class=" col-sm-12 col-xs-12 col-email">
						<input type="text" name="email" placeholder="Email" class=
						"form-control">
				
					</div>
					<div class="col-sm-12 col-xs-12 col-pwd">

						<input type="password" name="pwd" placeholder="Password" class=
						"form-control">
					</div>

					<div class=" col-sm-12 col-xs-12 col-btn">

						<button type="submit" class="btn btn-primary" style="width: 100%" id="login1">Log In</button>
					</div>
				</form>
			</div>
			<div class="row">
				
				<div class="col-md-offset-0 col-md-6 col-lg-offset-0 col-lg-6 hidden-ms hidden-sm visible-md visible-lg">
				<p id="para">Facebook helps you connect and share with<br> the people in your life.</p>
				

				</div>

				<div class="col-md-offset-0 col-md-6 col-lg-offset-0 col-lg-6 hidden-sm hidden-xs">
				<h3><b>Sign Up</b></h3>
				<p id="free">It's free and always will be.</p>
				<hr class="notfoot hidden-ms hidden-sm visible-md visible-lg">

				</div>

			</div>

			<div class="row">
				<form method="post" enctype="multipart/form-data" action="<?php echo base_url().'/index.php/Facebook/signup'?>">

				<div class="col-md-offset-0 col-md-6 col-lg-offset-0 col-lg-6 hidden-ms hidden-sm visible-md visible-lg">
					<img id="image" src="image/fb2.png">


				</div>

				<div class="col-md-offset-0 col-md-6 col-lg-offset-0 col-lg-6">
					<div class="row">
						<div class="col-md-offset-0 col-md-4 col-lg-offset-0 col-lg-4 left hidden-ms hidden-sm visible-md visible-lg">
							<p id="fn">First Name:</p>
							<p id="ln">Last Name:</p>
							<p id="ye">Your Email:</p>
							<p id="re">Re-enter Email:</p>
							<p id="np">New Password:</p>
							<p id="up">Upload Picture:</p>
							<p id="iam">I am:</p>
							<p id="birth">Birthday:</p>

						</div>



								<div class="col-md-8 hidden-ms hidden-sm visible-md visible-lg">
									<input class="input1 form-control" type="text" name="fname"><br>
									<input class="input2 form-control" type="text" name="lname"><br>
									<input class="input3 form-control" type="email" name="email"><br>
									<input class="input4 form-control" type="email" name="remail"><br>
									<input class="input5 form-control" type="password" name="pwd"><br>
									<!-- <label class="btn btn-success btn-file uploadbtn"> -->
									    Browse <input type="file" class= "btn btn-success btn-file uploadbtn" name="uploadbtn" style="display: none;">
									<!-- </label><br> -->
								
									<select class="gender" name="gender">
									<option value="" selected="">Select Sex :</option>
									<option value="male">Male</option>
									<option value="female">Female</option>
									  
									</select> <br>
										
														
											<select class="day" name="month">
										 	<option value="" selected="">Month :</option>
										  	<option value="1">January</option>
  											<option value="2">February</option>
  											<option value="3">March</option>
  											<option value="4">April</option>
  											<option value="5">May</option>
  											<option value="6">June</option>
  											<option value="7">July</option>
  											<option value="8">August</option>
  											<option value="9">September</option>
  											<option value="10">October</option>
  											<option value="11">November</option>
  											<option value="12">December</option>
										  	</select> 

										  	<select class="" name="day">
										 	<option value="" selected="">Day :</option>
										  	<option value="1">1</option>      
										    <option value="2">2</option>      
										    <option value="3">3</option>      
										    <option value="4">4</option>      
										    <option value="5">5</option>      
										    <option value="6">6</option>      
										    <option value="7">7</option>      
										    <option value="8">8</option>      
										    <option value="9">9</option>      
										    <option value="10">10</option>      
										    <option value="11">11</option>      
										    <option value="12">12</option>      
										    <option value="13">13</option>      
										    <option value="14">14</option>      
										    <option value="15">15</option>      
										    <option value="16">16</option>      
										    <option value="17">17</option>      
										    <option value="18">18</option>      
										    <option value="19">19</option>      
										    <option value="20">20</option>      
										    <option value="21">21</option>      
										    <option value="22">22</option>      
										    <option value="23">23</option>      
										    <option value="24">24</option>      
										    <option value="25">25</option>      
										    <option value="26">26</option>      
										    <option value="27">27</option>      
										    <option value="28">28</option>      
										    <option value="29">29</option>      
										    <option value="30">30</option>      
										    <option value="31">31</option> 
										  	</select> 
										  	<select class="" name="year">
										 	<option value="" selected="">Year :</option>
										 	<option value="2002">2002</option>
										  	<option value="2009">2009</option>      
										    <option value="2010">2010</option>      
										    <option value="2011">2011</option>      
										    <option value="2012">2012</option>      
										    <option value="2013">2013</option>      
										    <option value="2014">2014</option>      
										    <option value="2015">2015</option>      
										    <option value="2016">2016</option>      
8										    <option value="2017">2017</option>      
										    <option value="2018">2018</option>     
										  	</select> 
								</div>

							</div>
										<div class="row hidden-sm hidden-xs visible-lg visible-md">

											<div class="col-md-8 wh">
												<p id="why">Why do I need to provide my birthday?</p>
												<button type="submit" class="btn btn-md btn1"><b>Sign Up</b></button>
												<hr id="foot" class="hidden-sm hidden-xs">
												<p class="foote"><b class="page">Create a Page</b> for a celebrity, band or business</p>
											</div>

										</div>


						</div>



										<div class"row">
										<div class="col-sm-12- col-xs-12 hidden-md hidden-lg visible-sm visible-xs">
										<button type="submit" class="btn btn-md btn2"><b>Sign Up</b></button>
										</div>
										</div>
						</form>

				</div>
			</div>

	</body>

</html>