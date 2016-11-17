<?php

	include ('../includes/db_include.php');
	include('../includes/admin_functions.php');

	$node = getNode($_GET['id']);
	
?>

<h1><?= $node['headline']?></h1>
<div>
	<a href='./edit_node.php?id=<?= $node[id] ?>'>Edit</a><br/>
	<form action='./delete_node.php' method='POST'>
		<input type='hidden' value='<?= $node['id'] ?>' name='id'/>
		<input type='submit' value='Delete'/>
	</form><br/>
	<a href='./index.php'>Back</a>
</div>
<?php 
	switch($node['type']){
		case 'news':
		 ?>
			<p><?= $node['teaser'] ?></p>
			<p>Publication: <?= $node['publication']?></p>
			<p>URL: <?= $node['url']?></p>
			<p>Publish date: <?= date('F j, Y', strtotime($node['publish_date']))?></p>
		<?
			break;
		case 'releases':
		 ?>
			<p><?= $node['teaser'] ?></p>
			<p>Publication: <?= $node['publication']?></p>
			<p>URL: <?= $node['url']?></p>
			<p>Publish date: <?= date('F j, Y', strtotime($node['publish_date']))?></p>
		<?
			break;
		case 'published':
		 ?>
			<p><?= $node['teaser'] ?></p>
			<p><?= $node['content'] ?></p>
			<p>Publication: <?= $node['publication']?></p>
			<p>URL: <?= $node['url']?></p>
			<p>Publish date: <?= date('F j, Y', strtotime($node['publish_date']))?></p>
		<?
			break;
		case 'assets':
		 ?>
			<p><?= $node['teaser'] ?></p>
			<p>Small: <?= $node['publication']?></p>
			<p><img src='../images/<?= $node[publication]?>'/></p>
			<p>Large: <?= $node['url']?></p>
			<p><img src='../images/mediashots/<?= $node[url]?>'/></p>
			<p>Publish date: <?= date('F j, Y', strtotime($node['publish_date']))?></p>
		<?
			break;	
} ?>