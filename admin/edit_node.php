<?php 
	include ('../includes/db_include.php');
	include('../includes/admin_functions.php');

	$node = getNode($_GET['id']);

	include('./edit_node_form.php');
?>