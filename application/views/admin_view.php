
		<h1><?php echo $title; ?> | Admin </h1>
		<?php echo form_open('Admin/create') ?>
			<div id="main">
			<label>Title</label>
			<input type="text" name="title">
			<label>Content</label>
			<textarea name="content"></textarea>
			<input type="submit" name="submit" value="Create">
			</div>
		</form>
		<div id="edit">
		<h2>Edit Posts</h2>
		<ul>
		<?php foreach($posts as $post): ?>
			 <li><a href="/~ccit1571/cct460/index.php/Admin/update/<?php echo $post['ID']; ?>"><?php echo $post['title']; ?></a> | <a href="/~ccit1571/cct460/index.php/Admin/delete/<?php echo $post['ID']; ?>">delete post</a></li> 
		<?php endforeach; ?>
		</ul>
	</div>