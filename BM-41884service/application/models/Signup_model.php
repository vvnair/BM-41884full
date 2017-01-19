
<?php

class Signup_model extends CI_Model{

public function index($user)

		{
			
				$dob=$user['year']."-".$user['month']."-".$user['day'];
					
					
				$storedproc="call signup(?,?,?,?,?,?)";
				if($this->db->query($storedproc, array('fname'=>$user['firstname'],'lname'=>$user['lastname'],'pic'=>$user['filename'],'year'=>$dob,'email'=>$user['email'],'password'=>$user['Password']))){
					$array2 = array('Msg'=>"OK", 'Response'=> '9');
				}
				else
				{
					$array2 = array('Msg'=>"sorry", 'Response'=> '0');
				}
				//$result=$this->db->query("call signup('sample','sample','sample.jpg',1994,'vivek2','Pass@123word')");// working 
				return $array2;

		}

		//addUser($user['firstname'],$user['lastname'],$data['file_path'],$user['year'],$user['Password'])
	
			//$this->db->query("call signup({$user['firstname'],$user['lastname'],$data['file_path'],$user['year'],$user['Password']})");  
}
?>



