<?php

// detect homepage or subdomain (session) user
$sessionRaw = (array_shift((explode('.', $_SERVER['HTTP_HOST']))));
// avoid the script kiddies
$sessionIdentify = filter_var($sessionRaw, FILTER_SANITIZE_STRING);

// what to serve? home or session?
if ($sessionIdentify == "heatsink")
{
include("home-external.php");
} else if ($sessionIdentify == "www") {
include("home-external.php");
} else {
include('home-session.php');
}

?>