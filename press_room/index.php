<?php 
	include ('../includes/db_include.php');
	include('../includes/display_functions.php'); 
	$title='Press Room | '; 
	$page_id="press"; 
	include ('../includes/header.php'); 

	$news = getAllByType('news',array('year'=>'All','limit'=>4));
	
	
?>
	
<div class="section" id="main">
	<h2>David Barrett Partners continues to be active in senior investment and wealth management leadership hires.</h2>

	<img src="/images/press_photo_marcus.jpg" alt="Photo" />

	<div>
		<h3 class="news_head">In the News</h3>
		<ol>
			<?php
				showRows($news);
			?>
		</ol>
		
		<a class="divide" href="in_the_news.php">More in the News</a>
	
	</div>
	

</div>

<div class="aside" id="side_nav">
	<h4>Press Room</h4>
	<ul>
			<li class="news_nav"><a href="/press_room/in_the_news.php">News &amp; Announcements</a></li>
			<li class="media_nav"><a href="/press_room/media_assets.php">Media Assets</a></li>
	</ul>
</div>

<?php include ('../includes/footer.php'); ?>