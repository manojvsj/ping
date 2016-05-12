<?php
include "db.php";

if(isset($_POST['host'])) {
	$dbcon = new dbcon();
	$con = $dbcon->connect();
	$host = $_POST['host'];
	$port = $_POST['port'];
	if(!empty($host) && !empty($port)) {
		$query = "insert into host(host,port) values (:host,:port)";
		$stmt = $con->prepare($query);
		$stmt->bindParam(':host', $host, PDO::PARAM_STR);
		$stmt->bindParam(':port', $port, PDO::PARAM_INT);
		$res = $stmt->execute();
		print $res;
	}
} else {
	print 0;
}
?>