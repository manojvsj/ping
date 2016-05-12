<?php
	include "db.php";
	$dbcon = new dbcon();
	$con = $dbcon->connect();
	$query = "select distinct host,port from host";
	$stmt = $con->prepare($query);
	$stmt->execute();
	$res =  $stmt->fetchAll(PDO::FETCH_ASSOC);
	
	if(count($res)) {
		$html = '<table  class="table table-striped">
				  <thead>
					<tr>
					  <th style="text-align:center">Host Name</th>
					  <th style="text-align:center">Port</th>
					  <th style="text-align:center">Currnt Status</th>
					</tr>
				  </thead>
				  <tbody>';
		foreach($res as $key=>$value) {
			$html.='<tr class="row_value">
					  <td class="host">'.$value['host'].'</td>
					  <td class="port">'.$value['port'].'</td>
					  <td class="status"><img src="/ping/img/dot_loader.gif"></img></td>
					</tr>';
		}
		$html.='</tbody>
				</table>';
	}
	else {
		$html = 'Host name not available.. please add';
	}
	
	print $html;

?>