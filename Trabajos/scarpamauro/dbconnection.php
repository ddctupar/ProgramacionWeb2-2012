<?php
	function GetDBConnection(){
		$dbhost = 'localhost';
		$dbuser = 'root';
		$dbpass = '';
		$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die                      ('Error connecting to mysql');
		$dbname = 'tandilinmobiliario';
		mysql_select_db($dbname);
		return $conn;
	}
?>