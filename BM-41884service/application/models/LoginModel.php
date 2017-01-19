<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

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
	public function userAuth($data)//$data
	{
		//$one=1;
		//$array = array("$data" = >$data,'int_status =' => $one);
		$result = $this->db->select('vchr_image, vchr_fname, vchr_lname, vchr_username,int_status')->from('tbl_login_details')->join('tbl_user_details', 'tbl_user_details.fk_int_lid = tbl_login_details.pk_int_lid')->where($data)->get(); //before using queries set database values and enable array('database') in autoload.php $this->db->join('comments', 'comments.id = blogs.id'); where($data)->get();

		if($result->num_rows()==1)
		{

			foreach ($result->result_array() as $row)
			{
       			$img = $row['vchr_image'];
				$fname = $row['vchr_fname'];
				$lname = $row['vchr_lname'];
				$username = $row['vchr_username'];
				$status=$row['int_status'];
			}
			
				//print_r($data);
			if($status==1)
			{
			
			$arrayresult = array('Msg' =>'Success' ,'ResponseCode' => '200', 'Image' => $img, 'Firstname' => $fname, 'lastname' => $lname, 'Username' => $username,'Status'=>$status );
			}
			else
			{
				$arrayresult = array('Msg' =>'Success' ,'ResponseCode' => '500', 'Image' => $img, 'Firstname' => $fname, 'lastname' => $lname, 'Username' => $username,'Status'=>$status );	
			}




		}
		else 
		{
				$email = $data['vchr_username'];

				//echo $data['vchr_username'];

				
				$result2=$this->db->select('vchr_image, vchr_fname, vchr_lname, vchr_username')->from('tbl_login_details')->join('tbl_user_details', 'tbl_user_details.fk_int_lid = tbl_login_details.pk_int_lid')->where('vchr_username', $email)->get();

				foreach ($result2->result_array() as $row)
				{
	       			$img = $row['vchr_image'];
					$fname = $row['vchr_fname'];
					$lname = $row['vchr_lname'];
					$username = $row['vchr_username'];
				}
					

				if($result2->num_rows()==1)

				{

					$arrayresult = array('Msg' =>'Password is incorrect' ,'ResponseCode' => '500', 'Image' => $img, 'Firstname' => $fname, 'lastname'=> $lname, 'Username' => $username);
				
				}


				else
				{
					$arrayresult = array('Msg' =>'Email or password is incorrect' ,'ResponseCode' => '404');
				}
			
		}

		return $arrayresult;
	}
}
