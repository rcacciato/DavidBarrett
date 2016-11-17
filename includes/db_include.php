<?php
	switch($_SERVER['HTTP_HOST'])
	{
		
		case 'davidbarrett:8888':
		$connect = mysql_connect('localhost:/tmp/mysql.sock','dbp','barrett10169') or
			die('Could not connect to db: ' . MYSQL_ERROR());
		break;
		
		default:
		$connect = mysql_connect('localhost','dbp','barrett10169') or
			die('Could not connect to db: ' . MYSQL_ERROR());
	}
	

	
	$db = mysql_select_db('dbp', $connect) or
		die('Could not select db: ' . MYSQL_ERROR());
	

?>