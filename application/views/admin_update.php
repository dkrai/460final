<?php foreach($posts as $p): ?>
	<?php echo form_open('Admin/update_post/' . $p['ID']) ?>
		<label>Title</label>
		<input type="text" name="title" value="<?php echo $p['title']; ?>">
		<label>Content</label>
		<textarea name="content"><?php echo $p['content']; ?></textarea>
		<input type="submit" name="submit" value="Save">
	</form>
<?php endforeach; ?>
	
	<h2>Edit Posts</h2>
	<ul>
		<?php foreach($posts as $post): ?>
			<li><a href="/~ccit1571/cct460/index.php/Admin/update/<?php echo $post['ID']; ?>"><?php echo $post['title']; ?></a></li>
		<?php endforeach; ?>
	</ul>