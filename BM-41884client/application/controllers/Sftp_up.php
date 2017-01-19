<?php

class Sftp_up extends CI_Controller {


public function index() {


set_include_path(get_include_path() . PATH_SEPARATOR . 'phpseclib/phpseclib');
include('Net/SSH2.php');
include('Net/SFTP.php');

$sftp = new Net_SFTP('13.76.212.119',22);
if (!$sftp->login('file', 'file123!')) { //if you can't log on...
    exit('sftp Login Failed');
}
echo $sftp->pwd();

$output = $sftp->put('/root/1_yum_stuff.sh', '1_yum_stuff.txt');
echo $output;
$output = $sftp->exec('ls -a');
//$output = $sftp->exec('./1_yum_stuff.sh & 1>1.txt');
echo $output;
$output = $sftp->exec('pwd');
echo $output;
echo("3rd try!");


/*$this->load->library('sftp'); // initialize library
$this->sftp->connect(); // connect to sftp server. if autoconnect option set to false
print_r($this->sftp->files_list('/BM-41884/')); //get list of files
}*/

/*    function __construct()
    {
        parent::__construct();

        // Load libraries
        $this->load->library('sftp');

    }
*/


/*	 public function index() {
		
		
		 $sftp_config['hostname'] = '13.76.212.119';
		 $sftp_config['username'] = 'file';
		 $sftp_config['password'] = 'file123!';
		 $sftp_config['debug'] = TRUE;
		
	
		$this->sftp->connect($sftp_config);*/

		//echo "error";

		

		
		
		//$success = $this->sftp->upload("http://localhost/BM-41884c/uploads/","/BM-41884/");
		
		
		/*
		download:	This will download a file from the remote filesystem to the local filesystem.
					It will also overwrite any file that's on the local filesystem of the same name.
		*/
		//$success = $this->sftp->download("/tmp/test.csv", "/var/www/cgi-bin/data/test.csv");
		
		
		/*
		mkdir:	This will create a directory on the remote filesystem.
		*/
		//$success = $this->sftp->mkdir("/BM-41884/test/");
		
		
		/*
		rename:	This will rename a file on the remote filesystem.
		*/
		//$success = $this->sftp->rename("/tmp/test/test.csv", "/tmp/test/test2.csv");
		
		
		/*
		delete_file:	This will remove a file on the remote filesystem.
		*/
		//$success = $this->sftp->delete_file("/tmp/test/test2.csv");
		
		
		/*
		delete_dir:	This will remove a diretory on the remote filesystem.
		*/
		//$success = $this->sftp->delete_dir("/tmp/test/");
		
		
		/*
		list_files:	This will list all files in a diretory on the remote filesystem.
		*/
		//$success = $this->sftp->list_files("/BM-41884/test/", TRUE);
		
		
		// Output is the method was successful!
		//print_r($success);
	//} 
//----------------------------------------------------------------------------------->
}
?>