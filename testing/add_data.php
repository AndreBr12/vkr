
<?php
	    $S1 =  $_GET['v'];
	    $myFile1 = "txt/in1.txt";
		$fh1 = fopen($myFile1, 'w') or die("can't open file");
		fwrite($fh1, $S1);
		fclose($fh1);
		
        $S3 =  $_GET['t'];
	    $myFile3 = "txt/in2.txt";
		$fh3 = fopen($myFile3, 'w') or die("can't open file");
		fwrite($fh3, $S3);
		fclose($fh3);
      
        $myFile = "txt/out-1.txt";
        $fh = fopen($myFile, 'r');
        $theData = fread($fh, filesize($myFile));
        fclose($fh);
        echo $theData;


		
 
?>

