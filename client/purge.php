<?php
$ini = parse_ini_file('config.ini');
$activation = $_GET['sid'];
$url = $ini['domainName'];
header("refresh:5;url=".$url);

// delete files associated with client profile/certs
 exec('nohup sshpass -p'
 .$ini['sshPass'].
' ssh -o StrictHostKeyChecking=no '
 .$ini['sshUser'].
'@'
 .$ini['sshHostname'].
' bash ./delclient.sh '
 .$activation.
' > /dev/null 2>&1 &');

include('generate-html.php');
die();
?>