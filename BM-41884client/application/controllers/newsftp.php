<?php
set_include_path(APPPATH . '/third_party/phpsec');
require_once APPPATH."/third_party/phpsec/Net/SFTP.php"; 

$sftp = new Net_SFTP('13.76.212.119');
if (!$sftp->login('file', 'file123!')) {
    exit('Login Failed');
}

// puts a three-byte file named filename.remote on the SFTP server
$sftp->put('filename.remote', 'xxx');
// puts an x-byte file named filename.remote on the SFTP server,
// where x is the size of filename.local
$sftp->put('filename.remote', 'filename.local', NET_SFTP_LOCAL_FILE);
?>