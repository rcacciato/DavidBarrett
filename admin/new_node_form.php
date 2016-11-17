<?php  if(!empty($errors))
	echo implode('<br/>',$errors);

?>

<form action='./create_node.php' method='POST' enctype="multipart/form-data">
		<select name='node[type]' id='type_select'>
			<option value='news' <?= $values['type'] == 'news' ? 'selected' : ''?>>News</option>
			<option value='assets' <?= $values['type'] == 'assets' ? 'selected' : ''?>>Assets</option>
		</select>
		<div id='news' class='node_form active'>
			<p>Headline: <input name='node[headline]' value='<?= htmlspecialchars($values['headline'], ENT_QUOTES) ?>'/></p>
			<p>Teaser: <textarea name='node[teaser]>'><?= htmlspecialchars($values['teaser'], ENT_QUOTES) ?></textarea></p>
			<p id='has_content'>Has Content? <input name='node[has_page]' type='checkbox' value='1' <?= $values['has_page'] == true ? 'checked' : '' ?>/></p>
			<p id='content_area'>Content: <textarea name='node[content]>'><?= htmlspecialchars($values['content'], ENT_QUOTES) ?></textarea></p>
			<p>Publication: <input name='node[publication]' value='<?= htmlspecialchars($values['publication'], ENT_QUOTES)?>'/></p>
			<p>URL: <input name='node[url]' value='<?= htmlspecialchars($values['url'], ENT_QUOTES) ?>'/></p>
			<p>Image URL: <input name='node[image_url]' value='<?= htmlspecialchars($values['image_url'], ENT_QUOTES) ?>'/></p>
			<p>Upload PDF: <input type="file" name="file" id="pdf"></p>
			<p>Publish date: <?= dateTimeSelect('node', $values['publish_date']) ?></p>
			<input type="hidden" name="node[homepage]" value="0" />
			<p>Publish to Homepage: <input type="checkbox" name='node[homepage]' value='1' <?php if($node['homepage'] == 1) print 'checked'; ?>/></p>
		</div>
		<div id='assets' class='node_form'>
			<p>Name: <input name='node[headline]' value='<?= htmlspecialchars($values['headline'], ENT_QUOTES) ?>'/></p>
			<p>Small Image Name: <input name='node[publication]' value='<?= htmlspecialchars($values['publication'], ENT_QUOTES) ?>'/></p>
			<p>Large Image Name: <input name='node[url]' value='<?= htmlspecialchars($values['url'], ENT_QUOTES) ?>'/></p>
			<p>Publish date: <?= dateTimeSelect('node', $values['publish_date']) ?></p>
		</div>
		<input type='submit'/>
</form>
<br/>
<a href='./index.php'>Cancel</a>
<script type="text/javascript" charset="utf-8" src='https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js'></script>
<script type="text/javascript" charset="utf-8">
	$('#content_area').hide();
	$('.node_form').hide();
	$('.node_form :input').attr('disabled',true);
	$('#'+ $('#type_select').val()).show();
	$('#'+ $('#type_select').val()+' :input').attr('disabled',false);
	$('#type_select').change(function(){
		$('.node_form').hide();
		$('.node_form :input').attr('disabled',true);
		$('#'+ $('#type_select').val()).show();
		$('#'+ $('#type_select').val()+' :input').attr('disabled',false);
	});
	$('#has_content').click(function(){
		$('#content_area').toggle();
	});
</script>