		<div id="title"><h1><?php echo $title; ?></h1></div>
		<?php foreach($posts as $post): ?>
			<h2><?php echo $post['title']; ?></h2>
			<p><?php echo $post['content']; ?></p>
		<?php endforeach; ?>

		<?php echo form_open("blog/search"); ?>
			<label>Search:</label>
			<input type="text" name="searchquery" />
			<input type="submit" name="submit" value="Go">
		</form>