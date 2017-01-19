<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verify extends CI_Controller {


		public function index()
		{

			$user['email']=$this->input->get_post('email');	

			$this->load->model('Verification_model');
			$array2=$this->Verification_model->index($user);


		}


}