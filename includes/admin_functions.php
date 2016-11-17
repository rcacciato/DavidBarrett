<?php

	function getPressRoom()
	{
		$query = "SELECT id, headline, teaser, publication, publish_date, type, url FROM press_room ORDER BY publish_date DESC";
		$query .= $limit != null ? " LIMIT $limit" : "";
		$results = mysql_query($query) or
			die('Invalid Query: '. MYSQL_ERROR());
		return $results;
	}

	function showRows($results)
	{
		while($row = mysql_fetch_array($results)){
			?>
			<tr>
				<td><?= $row['headline']?></td>
				<td><?= $row['type']?></td>
				<td><?= formatDate($row['publish_date']) ?></td>
				<td><a href="./node.php?id=<?= $row[id]?>">Show</a> <a href="./edit_node.php?id=<?= $row[id]?>">Edit</a></td>
			</tr>
			<?
		}
	}
	
	function getNode($id)
	{
		$query = "SELECT * FROM press_room WHERE id = $id";
		$result = mysql_query($query) or
			die('Invalid Query: '.MYSQL_ERROR());
		return mysql_fetch_array($result);
	}
	
	function dateTimeSelect($object,$date=null)
	{
		if($date == null)
		$date = date('c');
		?>
		<select name='<?= $object?>[date][year]'>
		<?
			for($i=(((int)date('Y')) - 10);$i <= (((int)date('Y')) + 5);$i++){
				?>
					<option value='<?= $i ?>' <?= (int)date('Y',strtotime($date)) == $i ? 'selected' : '' ?>><?= $i ?></option>
				<?
			}
		?>
		</select>
		<select name='<?= $object?>[date][month]'>
		<?
			for($i=1;$i <= 12;$i++){
				?>
					<option value='<?= $i ?>' <?= (int)date('m',strtotime($date)) == $i ? 'selected' : '' ?>><?= date('F', mktime(0,0,0,$i,01,2000)) ?></option>
				<?
			}
		?>
		</select>
		<select name='<?= $object?>[date][day]'>
		<?
			for($i=1;$i <= 31;$i++){
				?>
					<option value='<?= $i ?>' <?= (int)date('d',strtotime($date)) == $i ? 'selected' : '' ?>><?= $i ?></option>
				<?
			}
		?>
		</select>
		<select name='<?= $object?>[date][hour]'>
		<?
			for($i=0;$i <= 23 ;$i++){
				?>
					<option value='<?= $i ?>' <?= (int)date('G',strtotime($date)) == $i ? 'selected' : '' ?>><?= $i ?></option>
				<?
			}
		?>
		</select>
		<select name='<?= $object?>[date][min]'>
		<?
			for($i=0;$i <= 59;$i++){
				?>
					<option value='<?= $i ?>' <?= (int)date('i',strtotime($date)) == $i ? 'selected' : '' ?>><?= $i ?></option>
				<?
			}
		?>
		</select>
		<?	
	}
	
	function createNode($node)
	{
		$keys = array();
		$values = array();
		$query = "INSERT INTO press_room ";
		foreach($node as $key => $value){
			$keys[] = mysql_real_escape_string(stripslashes($key));
			$values[] = mysql_real_escape_string(stripslashes($value));
		}
		
		$query .= "(".implode(',',$keys).") VALUES ('".implode('\',\'',$values)."')";
		mysql_query($query) or
			die('Invalid Query: '.MYSQL_ERROR(). " Query: ".$query);
		return true;
	}
	
	function updateNode($id, $values)
	{	$response = array();
		
		$query = "UPDATE press_room SET ";
		$sets = array();
		foreach($values as $key => $value){
			$sets[] = "$key = '". mysql_real_escape_string(stripslashes($value)) . "'";
		}
		$query .= implode(',',$sets);
		$query .= " WHERE id = $id";
		mysql_query($query) or
			die("Invalid Query: ".MYSQL_ERROR(). " Query: ".$query);
		return true;
	}
	
	function deleteNode($node)
	{
		$query = "DELETE FROM press_room WHERE id=$node[id]";
		mysql_query($query) or
			die("Invalid Query: ".MYSQL_ERROR()." Query: ".$query);
		return true;
	}
	
	function validateNewNode($values)
	{
		$errors = array();
		switch($values['type']){

			case 'news':
				if(empty($values['headline']))
					$errors[] = 'Please enter a headline.';
				if(empty($values['teaser']))
					$errors[] = 'Please enter teaser text.';
				if(empty($values['publication']))
					$errors[] = 'Please enter a publication.';
				if(empty($values['url']) && $values['has_page'] != true)
					$errors[] = 'Please enter a url.';
				break;
			case 'assets':
				if(empty($values['headline']))
					$errors[] = 'Please enter a name.';
				if(empty($values['publication']))
					$errors[] = 'Please enter a small image name.';
				if(empty($values['url']))
					$errors[] = 'Please enter a large image name.';
				break;
		}
		return $errors;
	}
	
	function validateNode($node, $values)
	{
		$errors = array();
		switch($node['type']){

			case 'news':
				if(empty($values['headline']))
					$errors[] = 'Please enter a headline.';
				if(empty($values['teaser']))
					$errors[] = 'Please enter teaser text.';
				if(empty($values['publication']))
					$errors[] = 'Please enter a headline.';
				if(empty($values['url']) && $node['has_page'] != true)
					$errors[] = 'Please enter a url.';
				break;
			case 'assets':
				if(empty($values['headline']))
					$errors[] = 'Please enter a name.';
				if(empty($values['publication']))
					$errors[] = 'Please enter a small image name.';
				if(empty($values['url']))
					$errors[] = 'Please enter a large image name.';
				break;
		}
		return $errors;
	}
?>