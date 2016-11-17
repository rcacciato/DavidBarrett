<?php

	function getAllByType($type, $options = null)
	{
		
		if ($type == 'assets') {
			$query = "SELECT id, headline, publication, type, url FROM press_room WHERE publish_date <= NOW() AND type = '$type' ORDER BY publish_date";
			$results = mysql_query($query) or
				die('Invalid Query: '. MYSQL_ERROR());
			$rows = array();
			while($row = mysql_fetch_array($results)){
				$rows[] = $row;
			}
		}
		else {	
			$query = "SELECT id, headline, teaser, publication, publish_date, type, url, has_page FROM press_room WHERE publish_date <= NOW() AND type = '$type'";
			if ($options['year'] != 'All') {
				$query .= " AND YEAR(publish_date) = '" . mysql_real_escape_string($options['year']) ."'";			
			}

			$query .=  " ORDER BY publish_date ";
			$query .= $options['order'] ? $options['order'] : 'DESC';
			$query .= $options['limit'] ? " LIMIT $options[limit]" : "";
			$results = mysql_query($query) or
				die('Invalid Query: '. MYSQL_ERROR());
		
			$rows = array();
			while($row = mysql_fetch_array($results)){
				$rows[] = $row;
			}
		}
		return $rows;

	}
	
	function getNode($id)
	{
		$query = "SELECT * FROM press_room WHERE id = $id";
		$result = mysql_query($query);
		return mysql_fetch_array($result);
	}
	
	function showRows($results)
	{
		foreach($results as $row){
			?>
			<li>
				<h4><a href="<?= $row['has_page'] == 1 ? "./view.php?id=$row[id]" : $row['url']?>"><?= $row['headline']?></a></h4>
				<p><?= $row['teaser']?></p>
				<cite>Details in <em><a href="<?= $row['has_page'] == 1 ? "./view.php?id=$row[id]" : $row['url']?>"><?= $row['publication']?></a></em> <?= date('F j, Y', strtotime($row['publish_date']))?></cite>
			</li>
			<?
		}
	}
	
	function showAssets($results)
	{
		foreach($results as $row){
			?>			
			<li>
				<a href="../images/mediashots/<?= $row['url']?>"><img src="../images/<?= $row['publication']?>" alt="<?= $row['headline']?>" /></a>
				<p class="download"><a href="../images/mediashots/<?= $row['url']?>">Download</a></p>
				<h5><?= $row['headline']?></h5>
			</li>
			<?
		}
	}
	
	function showYearSelect($type, $year='All')
	{
		$query = "SELECT YEAR(publish_date) as year FROM press_room WHERE type='$type' GROUP BY YEAR(publish_date) ORDER BY publish_date DESC";
		$results = mysql_query($query) or
			die('Invalid Query' . MYSQL_ERROR() . ' Query:' . $query);
		?>
		<form action='' method='GET'>
			<select name='year'>
				<option style="vertical-align: bottom;" value='All' <?= $year=='All' ? 'selected' : '' ?>>All</option>
			<?
			while($row = mysql_fetch_array($results)){
			?>
				<option style="vertical-align: bottom;" value='<?= $row['year']?>' <?= $row['year']==$year ? 'selected' : '' ?>><?= $row['year']?></option>
			<?
			}
			?>
			</select>
			<input style="vertical-align: bottom;" id="submit" value="Show by Year" type='submit'/>
		</form>
		<?
	}

?>