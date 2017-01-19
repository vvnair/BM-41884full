<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facebook extends CI_Controller {

	


	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('facebook_login');

	}

	public function fetch()

	{

		$user['email']=$this->input->get_post("email");
		$user['password']=$this->input->get_post("pwd");
		$user['firstname']=$this->input->get_post("fname");
		//$result1['Firstname']=$this->input->get_post("fname");


		$options = array(
    					'http' => array(
        					'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        					'method'  => 'POST',
        					'content' => http_build_query($user),
    						),
    					);
		$url='http://services.trainees.baabtra.com/BM-41884/index.php/Logincontroller/index';
		
		$context  = stream_context_create($options);
		$result = file_get_contents($url,false, $context);    // used to call the web service



		//$url='http://services.trainees.baabtra.com/BM-41884/index.php/Logincontroller/index';
		/*print_r($result);*/
	 
		
		$json=json_decode($result,true); //web service returns a json data, convert it to php array using json_decode
		$result1['data']=$json;
		//echo $user['email'];
		//echo $result1['email'];
		//print_r($json);


		
		//foreach ($json as $val)
			/*Responsecode=200 means login successfull
			 Responsecode=404 means emailid incorrect
			 Responsecode=500 means emailid correct ,password wrong case*/

			if($json['ResponseCode']==200)	//checks the value of responsecode returned from the service
				{
				$this->load->view("loginpage",$result1);} //loads a view from views folder
			 
			else if($json['ResponseCode']==500)
			{
				$this->load->view("wrongpass",$result1);
			}
			

			else if($json['ResponseCode']==404)
			{
				$this->load->view("wrongcred",$result1);
			}
			
	}

	public function signup()

	{
		$user['firstname']=$this->input->get_post("fname");
		$user['lastname']=$this->input->get_post("lname");
		$user['email']=$this->input->get_post("email");
		$user['remail']=$this->input->get_post("remail");
		$user['Password']=$this->input->get_post("pwd");
		$user['gender']=$this->input->get_post("gender");
		$user['month']=$this->input->get_post("month");
		$user['day']=$this->input->get_post("day");
		$user['year']=$this->input->get_post("year");
		$dob=$user['day'].$user['month'].$user['year'];


		$config['upload_path']          = './uploads/';
		//$config['upload_path']          = 'ftp://files.baabtra.com/BM-41884/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 5242880;  //in KB
        $user['maxsize']=$config['max_size'];
       

   		$user['upload']= $this->load->library('upload', $config);

   		if($this->upload->do_upload('uploadbtn'))
   		{
   			echo "OK";

   		}
   		else {
   			echo "SOrry";
   		}

 		
   			
   		$data = array('upload_data' => $this->upload->data());
   		/*$user['filesize']=$this->upload->data('file_size');
   		
   		$user['filename']=$this->upload->data('file_name');
   		echo $user['filename'];
   		$base_path='https://php.trainees.baabtra.com/BM-41884/uploads/';
   		$user['filename']=$base_path.'info.png';	
*/
   		$user['filename']=$_FILES['uploadbtn']['name'];
   		$user['filesize']=$_FILES['uploadbtn']['size'];
   		print_r($user);


   		/*$this->load->library('sftp');

		$config['hostname'] = 'ssh.13.76.212.119';
		$config['username'] = 'file';
		$config['password'] = 'file123!';

		$this->sftp->connect($config);

		$this->sftp->upload('/uploads/', '/BM-41884/1.jpg', 'ascii', 0775);
		//echo $this->sftp->upload('/uploads/', '/BM-41884/', 'ascii', 0775);

		$this->sftp->close(); */

		//$this->load->library('sftp');

				   		

   		//print_r($data);
   		//print_r($user);
   		
	
   		

   		//echo $this->upload->data('file_size');
   		//echo $config['max_size'];	
   		

   		//if($user['filesize']>$config['max_size'])
   		//{
   		//	echo "error";
   		//}
   		//echo $user['filename'];

  
		

			$options1 = array(
			    					'http' => array(
			        					'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
			        					'method'  => 'POST',
			        					'content' => http_build_query($user),
			    						),
			    					);

		$url1='http://services.trainees.baabtra.com/BM-41884/index.php/Signupcontroller/index';
		$context1  = stream_context_create($options1);
	$result2 = file_get_contents($url1,false, $context1);    // used to call the web service
		/*print_r($result);*/

	$json=json_decode($result2,true); //web service returns a json data, convert it to php array using json_decode
	$result3['data']=$json;

		print_r($json);
		//print_r(json_decode($result2,true));

		

		/*$sftp_config['hostname'] = '13.76.212.119';
		$sftp_config['username'] = 'file';
		$sftp_config['password'] = 'file123!';
		$sftp_config['debug'] = TRUE;

		$this->sftp->connect($sftp_config);

		$success = $this->sftp->upload("http://localhost/BM-41884c/uploads/","/BM-41884/");
		
		print_r($success);*/
	}



	                
}




