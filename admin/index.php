<?php

	include ('../includes/db_include.php');
	include('../includes/home_functions.php');
	include('../includes/admin_functions.php');
	
	$results = getPressRoom();
	

?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<title>DBP Press Room Admin</title>
		
	</head>
	<body id="">
		<h1 id="press_room_admin">Press Room Admin</h1>
		<a href='new_node.php'>Add New Press Room Content</a></br>
		<table>
			<thead>
				<th>Title</th>
				<th>Type</th>
				<th>Publish Date</th>
				<th>Controls</th>
			</thead>
			<tbody>
				<?php showRows($results); ?>
			</tbody>			
		</table>
	</body>
</html>