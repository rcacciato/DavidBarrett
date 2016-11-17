<?php
include ('../includes/db_include.php');
include('../includes/admin_functions.php');

$values = $_POST['node'];
$values['publish_date'] = $values['date']['year']. "-" . $values['date']['month']."-".$values['date']['day']." ".$values['date']['hour'].":".$values['date']['min'].":00";
unset($values['date']);

$errors = validateNewNode($values);

$allowedExts = array("pdf");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if (($_FILES["file"]["type"] == "application/pdf") && ($_FILES["file"]["size"] < 20000) && in_array($extension, $allowedExts))
{
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    // echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    // echo "Type: " . $_FILES["file"]["type"] . "<br>";
    // echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    // echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists($_SERVER['DOCUMENT_ROOT']."/press_room/pdfs/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      $_SERVER['DOCUMENT_ROOT']."/press_room/pdfs/" . $_FILES["file"]["name"]);
      }
    }
}

if(empty($errors)){
	createNode($values);
	$id = mysql_insert_id();
	header("location: ./node.php?id=$id");
	exit;
}else{
	include('./new_node_form.php');
}

?>