<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
	$this->load->helper('url');
	
	//$result1['Firstname']=$this->input->get_post("fname");
	
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

		.row-this{
					background-color: #3b5998;
					padding-top: 15px;
					padding-left: 8px;
					padding-bottom: 18px;
			} 

		.image1 {

			width: 180px;
			margin-left: 30px;
		}

		.input-group {

			margin-left: 250px;
			width: 40%;
			margin-top: -40px;
		}

		.input-group-btn {

		}

		.img2 {

			width: 30px;
			margin-left: 850px;
			margin-top: -55px;
			height: 30px;
		}

		.kat {
			margin-left: 900px;
			margin-top: -45px;
			color: white;
			
		}

		.img3 {

			width: 30px;
			margin-left: 70px; 
			margin-top: 35px;
		}

		.kathakali {

			margin-left: 115px;
			margin-top: -25px;
		}

		body {
			background-color: #DCE0EE;
		}

	 	.middlebox {

	 		background-color: white;
	 		
	 	}

	 	#update {

	 		color: blue;
	 		padding-top: 15px;
	 	}

	 	#add {
	 		color: blue;
	 		margin-left: 220px;
	 		margin-top: -30px;
	 	}

	 	#write {

	 		color: blue;
	 		margin-left: 430px;
	 		margin-top: -30px;
	 		padding-right: 15px;
	 	}

	 	.middleline {
	 		width: 100%;
	 		margin-top: -5px;
	 	}
		
		.middleimage {

			width: 55px;
			margin-top: -25px;
		}

		#whatis {
			margin-left: 85px;
			margin-top: -25px;
			padding-bottom: 25px;
		}

		.rightbox {

			background-color: white;
			margin-left: 20px;

			}

		#youradd {

			color: blue;
			padding-top: 15px;
		}

		.rightline {
			margin-top: -25px;
		}

		#flip {

			width: 100%;
			height: 100%;
			padding-bottom: 10px;
		}

		.bottombox {

			background-color: white;
			padding-bottom: 360px;
			margin-top: -30px;
		}

		.secondrow {
			margin-top: 20px;
		}

		/*mobile css */
		

		.row-this2{
					background-color: #3b5998;
					padding-top: 18px;
					padding-left: 8px;
					padding-bottom: 10px;
			} 

		.fbimg {

			padding-left: 25%;
		}

		.katimg {

			width: 30px;
			height: 30px;
			margin-left: 70%;
			margin-top: -50px;
		
		}

		#kat2 {
			color: white;
			margin-left: 70%;
			margin-top: -15px;
		
		}

		.katimg2 {

			width: 25px;
			height: 25px;
			margin-top: 20px;
			margin-left: 20px;

		}

		.katpara {
			margin-left: 50px;
			margin-top: -20px;
		}

		.edit {

			margin-left: 30px;
		}

		.mobbox1 {

			background-color: white;
			color: blue;
			padding-bottom: 40px;

		}

		#update2 {
			margin-top: 10px;
		}

		#add2 {
			margin-top: -5px;	
		}

		#write2 {
			margin-top: -5px;	
		}

		#hrmob {

			margin-top: -5px; 

		}

		.kathere {

			width: 60px;
			height: 60px;
			margin-top: -20px;
		}

		.mind2 {

			margin-left: 70px;
			margin-top: -40px;
			color: black;
		}

		.mobbox2 {

			background-color: white;
			margin-top: 15px;
			padding-bottom: 370px;
			margin-bottom: 20px;
			

		}

		.mobbox3 {

			background-color: white;
			margin-top: 15px;
			padding-bottom: 10px;
			margin-bottom: 20px;


		}
		
		#uradd {

			color: blue;
			margin-top: 10px;
		}

		#flip2 {

			width: 100%;
			height: 90%;
			margin-top: -30px;
		}
	</style>
</head>
<body>

	<div class="container-fluid">
		
				<div class="row row-this hidden-xs hidden-sm">
					<div class="col-md-offset-0 col-md-12 col-lg-offset-0 col-lg-12 ">
									<img class="image1" src="<?php echo base_url().'image/fb.png';?>">
					
					
					<form>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search Facebook">
						
					</div>
					
					</form>
					<div>
								<img src="<?php echo base_url().'uploads/'.$data['Image'];?>" class="img2"> 
								<p class="kat"><?php echo $data['Firstname']; ?></p>
								
					</div>
					</div>
					
					

				</div><!-- first row end here -->

					
						
						
					<!-- and here -->


				<div class="row secondrow hidden-xs hidden-sm"><!-- 2nd row here-->
						<div class="col-md-offset-0 col-md-3 col-lg-offset-0 col-lg-3">
							<img src="<?php echo base_url().'uploads/'.$data['Image'];?>" class="img3">
							<p class="kathakali"><?php echo $data['Firstname']; ?></p>
						</div>
						<div class="col-md-5 col-lg-5 middlebox">
							<p id="update">Update Status</p>
							<p id="add"> Add Photo/Video</p>
							<p id="write"> Write/Note</p>
							<hr class="middleline"> <br>
							<img src="<?php echo base_url().'uploads/'.$data['Image'];?>" class="middleimage">
							<p id="whatis"> What's on your mind? </p>

						</div>
						<div class="col-md-offset-1 col-md-3 col-lg=offset-1 col-lg-3 rightbox">
							<p id="youradd">Advertistment </p><br>
							<hr class="rightline">
							<img src="<?php echo base_url().'image/flip.jpg';?>" id="flip">

							
						</div>
						
				</div> <!-- ends here -->

				<div class="row hidden-sm hidden-xs"> <!--3rd row starts here -->
					<div class="col-md-offset-3 col-md-5 col-lg-offset-3 col-lg-5 bottombox">
						
					</div>
					

				</div> <!--3rd row ends here -->


				<!-- Mobile version starts here-->
					<div class="row row-this2 visible-sm visible-xs"><!--first row -->
						<div class="col-sm-12 col-xs-12">
							<img src="<?php echo base_url().'image/fb.png';?>" class="fbimg">
							<img src="<?php echo base_url().'uploads/'.$data['Image'];?>" class="katimg">
							<p id="kat2"><?php echo $data['Firstname']; ?></p>
						</div>


					</div>
				<!-- ends here -->
					<div class="row hidden-lg hidden-md">
						<div >
							<img src="<?php echo base_url().'uploads/'.$data['Image'];?>" class="katimg2">
							<p class="katpara"><?php echo $data['Firstname']; ?></p>
							<p class="edit"> Edit Profile</p>
						</div>
						
					</div>
					<div class="row hidden-md hidden-lg">
						<div class="col-sm-offset-1 col-sm-10 col-xs-offset-1 col-xs-10 mobbox1">
							<p id="update2">Update Status</p>
							<p id="add2">Add Photo/Video</p>
							<p id="write2">Write/Note</p>
							<hr id="hrmob"><br>
							<img src="<?php echo base_url().'uploads/'.$data['Image'];?>" class="kathere">
							<p class="mind2"> What's on your mind ? </p>

						</div>
						
					</div>
					<div class="row hidden-md hidden-lg">
						<div class="col-sm-offset-1 col-sm-10 col-xs-offset-1 col-xs-10 mobbox2">
							
						</div>
					</div>
					<div class="row hidden-md hidden-lg">
						<div class="col-sm-12 col-xs-12 mobbox3">
							<p id="uradd">Your Advertistment </p>
							<hr><br>
							<img src="<?php echo base_url().'image/flip.jpg';?>" id="flip2"> 
						</div>

						
					</div>



	</div>

	



</body>
</html>