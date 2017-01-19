<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logincontroller extends CI_Controller {

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
		
		if(isset($_REQUEST['email']) && isset($_REQUEST['password']) ) //check whether username and pass is set
		{
			$user['vchr_username']=$_REQUEST['email'];	// get email and pass from client
			$user['vchr_password']=$_REQUEST['password'];


			$this->load->model('LoginModel'); // queries are executed in model
			$array1 = $this->LoginModel->userAuth($user);
		}
		else {

			$array1 = array('Msg' =>'Email or password is not defined' ,'ResponseCode' => '404');
		}

		echo json_encode($array1);
		//print_r($array1);
	}
}
