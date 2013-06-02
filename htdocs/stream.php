<?php
$f = (isset($_GET["f"])) ? $_GET["f"] : NULL;
$file = "files/$f";
if (!$f) {
	echo "Error";
	exit(1);
}

header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

header("Content-Disposition: attachment; filename=" . urlencode($f));    
header("Content-Type: application/force-download");
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");
header("Content-Description: File Transfer");             
header("Content-Length: " . filesize($file));
flush(); // this doesn't really matter.

$fp = fopen($file, "r"); 
while (!feof($fp)) {
    echo fread($fp, 65536); 
    flush(); // this is essential for large downloads
}  
fclose($fp); 

?>
