<?php 
	include ('../includes/db_include.php');
	include('../includes/display_functions.php'); 
	$node = getNode($_GET['id']);
	$title='Press Releases | Press Room | ' . $node['headline'] . ' | '; 
	$page_id="press"; 
	include ('../includes/header.php');

?>
	
<div class="section" id="main">
	

	<div class="article">
		<h3><?= $node['headline'] ?></h3>
		
		<div class="body">
			<?= $node['content'] ?>			
		</div>
			
	</div>
	<div class="info">
		<div class="box">
			<h4>Contact</h4>
			<ul>
				<li>Ted Kister</li>
				<li>tkister@davidbarrettpartners.com</li>
				<li>+1.212.710.8840</li>
			</ul>
		
			<?if(!empty($node['url'])){?><p class="pdf"><a href="<?= $node['url'] ?>">Download PDF</a></p><?}?>
		</div>
		
		<? if(!empty($node['image_url'])){?>
		<div class="photo">
			<img src="<?= $node['image_url'] ?>">
		</div>
		<?}?>
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