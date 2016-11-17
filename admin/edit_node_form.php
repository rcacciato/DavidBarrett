<?php  if(!empty($errors))
	echo implode('<br/>',$errors);

?>

<form action='./update_node.php?id=<?= $node['id'] ?>' method='POST' enctype="multipart/form-data">
<?php

	switch($node['type']){
		case 'news':
		 ?>
			<p>Headline: <input name='node[headline]' value='<?= htmlspecialchars($node['headline'], ENT_QUOTES) ?>'/></p>
			<p>Teaser: <textarea name='node[teaser]>'><?= htmlspecialchars($node['teaser'], ENT_QUOTES) ?></textarea></p>
			<?if($node['has_page']){?><p>Content: <textarea name='node[content]>'><?= htmlspecialchars($node['content'], ENT_QUOTES) ?></textarea></p><?}?>
			<p>Publication: <input name='node[publication]' value='<?= htmlspecialchars($node['publication'], ENT_QUOTES)?>'/></p>
			<p>URL: <input name='node[url]' value='<?= htmlspecialchars($node['url'], ENT_QUOTES) ?>'/></p>
			<p>Image URL: <input name='node[image_url]' value='<?= htmlspecialchars($values['image_url'], ENT_QUOTES) ?>'/></p>
			<p>Upload PDF: <input type="file" name="file" id="pdf"></p>
			<p>Publish date: <?= dateTimeSelect('node', $node['publish_date']) ?></p>
			<input type="hidden" name="node[homepage]" value="0" />
			<p>Publish to Homepage: <input type="checkbox" name='node[homepage]' value='1' <?php if($node['homepage'] == 1) print 'checked'; ?>/></p>
		<?
			break;
		case 'assets':
		 ?>
			<p>Name: <input name='node[headline]' value='<?= htmlspecialchars($node['headline'], ENT_QUOTES) ?>'/></p>
			<p>Small Image Name: <input name='node[publication]' value='<?= htmlspecialchars($node['publication'], ENT_QUOTES) ?>'/></p>
			<p>Large Image Name: <input name='node[url]' value='<?= htmlspecialchars($node['url'], ENT_QUOTES) ?>'/></p>
			<p>Publish date: <?= dateTimeSelect('node', $node['publish_date']) ?></p>
		<?
			break;	
} ?>
	<input type='submit'/>
</form>
<br/>
<a href='./index.php'>Cancel</a>