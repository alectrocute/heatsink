<?php
$ini = parse_ini_file('config.ini'); 
$activation = md5(uniqid(rand(), true)); 
$url = "session.php?sid=$activation"; 

header("refresh:10;url=" . $url); 
    exec('nohup sshpass -p'
        .$ini['sshPass'].
    ' ssh -o StrictHostKeyChecking=no '
        .$ini['sshUser'].
    '@'
        .$ini['sshHostname'].
    ' bash ./newclient.sh '
        .$activation.
    ' > /dev/null 2>&1 &');

    include('generate-html.php'); 
die();
?>