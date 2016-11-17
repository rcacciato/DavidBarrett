<?php 
	include ('../includes/db_include.php'); 
	include('../includes/display_functions.php');
	$title='Media Assets | Press Room | '; 
	$page_id="media"; 
	include ('../includes/header.php'); 
	
	$results = getAllByType('assets', array('order'=>'ASC'));
	
?>
	
<div class="section" id="main">
	
	<div style="margin-top: 50px">
		<h3 class="media_head">Media Assets</h3>

		<h4>Team Portraits</h4>
		<p>Click image to download Portrait Package (hi-res and lo-res image set).</p>

		<ul class="headshots">	
			<?php
				showAssets($results);
			?>
		</ul>
	</div>

</div>

<div class="aside" id="side_nav">
	<h4>Press Room</h4>
	<ul>
		<li class="news_nav"><a href="/press_room/in_the_news.php">News &amp; Announcements</a></li>
		<li id="current" class="media_nav"><a href="/press_room/media_assets.php">Media Assets</a></li>
	</ul>
</div>


<?php include ('../includes/footer.php'); ?>