<?php 

	include ('../includes/db_include.php');
	include('../includes/display_functions.php'); 
	$title='In the News | Press Room | '; 
	$page_id="press"; 
	include ('../includes/header.php');
	
	$year = empty($_GET['year']) ? 'All' : $_GET['year'];
	$results = getAllByType('news', array('year'=>$year));
?>
	
<div class="section" id="main">

	<div style="margin-top: 50px;">
		<h3 class="news_head">In the News</h3>
		<? showYearSelect('news',$_GET['year']); ?>
		<ol>
			<?php
				showRows($results);
			?>
		</ol>
	</div>

</div>

<div class="aside" id="side_nav">
	<h4>Press Room</h4>
	<ul>
		<li id="current" class="news_nav"><a href="/press_room/in_the_news.php">News &amp; Announcements</a></li>
		<li class="media_nav"><a href="/press_room/media_assets.php">Media Assets</a></li>
	</ul>
</div>

<?php include ('../includes/footer.php'); ?>