<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verification_model extends CI_Model {

		public function index($user)
		{
			
			$result2=$this->db->select('vchr_hash')->from('tbl_login_details')->join('tbl_user_details', 'tbl_user_details.fk_int_lid = tbl_login_details.pk_int_lid')->where('vchr_username', $user['email']);
			   $query = $this->db->get();
			  if ($query->num_rows() > 0)  //Ensure that there is at least one result 
				{    
				    foreach ($query->result_array() as $row) //Iterate through results
				    {
				        //print_r($row['vchr_hash']);
				    
					$this->db->set('int_status','1', FALSE);
					$this->db->where('vchr_hash', $row['vchr_hash']);
					$this->db->update('tbl_login_details'); // gives UPDATE tbl_login_details SET int_status = 1 WHERE vchr_hash = 2
					$array2 = array('Msg'=>"OK", 'Response'=> '9');
					return $array2;
				}

				}

			  		

				
		}

}
