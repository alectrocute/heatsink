<html>
<body>
<?php include('loading-progress.php'); ?>

<pre>
<?php

include('serverconfig.php');
$cUID = md5(uniqid(rand(), true));
$data = "";
$genSend = "clear;".$genCMD.";".$genBreak.";logout;";

$success = '0';

// echo "# output log:<br>";
// echo "# your cUID hash will be ". $cUID . ". <br>";
if (!function_exists("ssh2_connect"))
die($clentPHPErrorMessage);
if (!($con = ssh2_connect("$serverIP", $sshPort))) {
// echo "#".$clientUnableConnectMessage."<br>";
} else {
if (!ssh2_auth_password($con, $serverUser, $serverPass)) {
// echo "#".$clientUnableConnectMessage."<br>";
} else {
// echo "# [logging into heatsink vpn server] <br>";
if (!($stream = ssh2_exec($con, $genSend) )) {
// echo "#".$clientUnableConnectMessage."<br>";
} else {
$success = 1;
// echo "# connected to ".$serverName." <br/>";
stream_set_blocking($stream, true);
while ($buf = fread($stream,4096)) {
if (strpos($data,$genBreak) !== false) {
fclose($stream);
}
$data .= $buf;
// echo "# ". $data . "<br />";
}
fclose($stream);
}
}
}
?>


</pre>
</body>
<script>
<?php if ($success == 1) { echo "setTimeout(function () {window.location.href = 'http://".$cUID.".".$mainDomain."';}, 1);"; }else{echo "setTimeout(function () {window.location.href = 'error.html';}, 1);";} ?>
</script>
</html>