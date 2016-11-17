<?php 

	function getHomeNode(){
		$query = "SELECT id, headline, teaser, publication, publish_date, type, url FROM press_room WHERE homepage = 1 ORDER BY publish_date DESC LIMIT 1";
		$results = mysql_query($query) or
		die('Invalid Query: '. MYSQL_ERROR());
		return $results;
	}

	function formatDate($mysqldate){
		$phpdate = strtotime( $mysqldate );
		$mysqldate = date( 'F d, Y', $phpdate );
		return $mysqldate;
	}

	function trimContent($string){
		$string = strip_tags($string);

		if (strlen($string) > 200) {

		    // truncate string
		    $stringCut = substr($string, 0, 200);

		    // make sure it ends in a word so assassinate doesn't become ass...
		    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
		}
		return $string;
	}

?>