<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signupcontroller extends CI_Controller {


	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it'	s displayed at http://example.com/  
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		
		//echo json_encode($_REQUEST);
	if(isset($_REQUEST['firstname']) && isset($_REQUEST['lastname']) && isset($_REQUEST['Password']) && isset($_REQUEST['email']) && isset($_REQUEST['remail']) && isset($_REQUEST['year']) && isset($_REQUEST['filename']) && isset($_REQUEST['filesize']) && isset($_REQUEST['month']) && isset($_REQUEST['day']))

		{
			$user['firstname']=$this->input->get_post('firstname');	
			$user['lastname']=$this->input->get_post('lastname');	
			$user['Password']=$this->input->get_post('Password');	
			$user['email']=$this->input->get_post('email');	
			$user['remail']=$this->input->get_post('remail');
			$user['year']=$this->input->get_post('year');
			$user['filename']=$this->input->get_post('filename');	
			$user['filesize']=$this->input->get_post('filesize');
			$user['month']=$this->input->get_post('month');	
			$user['day']=$this->input->get_post('day');	
			$user['maxsize']=5242880;		

			
			$thisyear = date('Y');
			
			




		
								if(!preg_match('([a-zA-Z]{3,30}\s*+)', $user['firstname']))
								{
									
									$array2 = array('Msg'=>"Please provide atleast 3 letters for first name", 'Response'=> '1');


								}
							
								
								elseif(!preg_match('([a-zA-Z]{1,30}\s*)', $user['lastname']))
								{
										$array2 = array('Msg'=>"Please provide a last name ", 'Response'=> '2');
								}

														
								elseif(!preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,13}$/', $user['Password']))
								{
									$array2 = array('Msg'=>"password should contain atleast 1 lowercase 1 uppercase 1 digit 1 special character and the length should be in between 8-13 ", 'Response'=> '3');
								}		
								

								elseif(!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/', $user['email']))
								{
									$array2 = array('Msg'=>"Please enter a valid email id", 'Response'=> '5');
								}
								
								
								elseif($user['remail']!=$user['email'])
								{
									$array2 = array('Msg'=>"Please enter the same email id", 'Response'=> '4');
								}

								elseif($thisyear-$user['year'] < 13)
								{
									$array2 = array('Msg'=>"You must me 13 or older to sign up !", 'Response'=> '6');
								}

								elseif($user['year'] == '')
								{
									$array2 = array('Msg'=>"Please provide a dob", 'Response'=> '6');
								}

								elseif(($user['filename']== null) ||($user['filesize'] > $user['maxsize']))

								{
									$array2 = array('Msg'=>"Please upload an image within size limit ", 'Response'=>'7');
								}

		


								else
								{
									
									$this->load->model("Signup_model");
									$array2=$this->Signup_model->index($user);
									$this->msg($user);
									$array2 = array('Msg'=>"OK", 'Response'=> '9');	

											
								}

									
			


		}

		else {

			$array2= array('Msg'=>"Please provide value for each field");
			
	   		}

echo json_encode($array2);

	}

	public function msg($user)//$user
	{

		$this->load->library('email');
		
		$this->email->set_newline("\r\n");

		$config['charset'] = 'utf-8';
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'html';
		$config['protocol']='smtp';
		$config['smtp_port']='465';
		$config['smtp_host']='ssl://smtp.googlemail.com';
		$config['smtp_user']='testbaabtra2017@gmail.com'; // u put your mail here
		$config['smtp_pass']='baabtratest';// your pass

		$useremail= $user['email'];
		//$useremail= 'appusvivek2@gmail.com';


		//http://localhost/BM-41884s/index.php/Verify/index

		$this->email->initialize($config);// crucial

		
		$this->email->from('testbaabtra2017@gmail.com', 'Admin');
		$this->email->to($user['email']); //$user['email']


		$this->email->subject('Verify your account now!');
		$html = '<p>Inorder to make sure you have a legit account please click the link below</p>';
		$html .='http://services.trainees.baabtra.com/BM-41884/index.php/Verify/index?email='.$useremail;
		//echo $html;
		$this->email->message($html);


		$this->email->send();
	
			
		$this->email->print_debugger();
	}
}
