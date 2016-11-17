<?php

include ('../includes/db_include.php');
include('../includes/admin_functions.php');

$node = getNode($_POST['id']);

deleteNode($node);

header('location: ./index.php');
exit;
	

?>