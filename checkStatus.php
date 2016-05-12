<?php
error_reporting(1);
try {
	if(isset($_GET['host'])) {
		$host = $_GET['host'];
		$port = isset($_GET['port'])?$_GET['port']:80;
		if(!empty($host) && !empty($port)) {
			$waitTimeoutInSeconds = 2;
			if ($fp = fsockopen($host,$port,$errCode,$errStr,$waitTimeoutInSeconds)) {
			  // It worked
				print 'up';
			} else {
				print 'down';
			}
			fclose($fp);
		} else {
			print 'Not Available';
		}
	} else {
			print 'error';
	}
} catch (Exception $e) {
	print 'error';
}

?>