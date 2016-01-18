<?php

class db_query {
	 const DBNAME = "vita";
	 const DBHOST = "locaLhost";
	 const DBUSER = "root";
	 const DBPASS = "";
	 
	  function __construct() {
		 $conn = mysql_connect(self::DBHOST, self::DBUSER, self::DBPASS)or die(mysql_error());
		 $sdb = mysql_select_db(self::DBNAME, $conn);
		 mysql_query("SET CHARACTER SET 'utf8'");
		 } 
	
}
$db_query = new db_query();

?>
