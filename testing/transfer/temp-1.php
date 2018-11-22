<?php 
$myFile = "../txt/in1.txt";
$fh = fopen($myFile, 'r');
$theData1 = fread($fh, filesize($myFile));
fclose($fh);
echo $theData1;
?>