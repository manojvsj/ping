<?php

class dbcon {
	protected $db;
	
	public function __construct() {
		try {
            $db_host = 'localhost';  //  hostname
            $db_name = 'ping';  //  databasename
            $db_user = 'root';  //  username
            $user_pw = '';  //  password

            $con = new PDO('mysql:host='.$db_host.'; dbname='.$db_name, $db_user, $user_pw);  
            $con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            $con->exec("SET CHARACTER SET utf8");  //  return all sql requests as UTF-8  
			$this->db = $con;
        }
        catch (PDOException $err) {  
            echo "harmless error message if the connection fails";
            $err->getMessage() . "<br/>";
            die();  //  terminate connection
        }
	}
	
	public function connect() {
		return $this->db;
	}
}

?>