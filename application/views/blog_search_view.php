		<div id="title"><h1><?php echo $title; ?></h1></div>
		<?php foreach($posts as $post): ?>
			<h2><?php echo $post['title']; ?></h2>
			<p><?php echo $post['content']; ?></p>
		<?php endforeach; ?>

		<h2>Search Results:</h2>