<h2><?php echo $title; ?></h2>

<?php foreach ($posts as $post): ?>

		<div class="well well-lg">
		
        <h3><?php echo $post['title']; ?></h3>


        <div class="main">
                <?php echo $post['body']; ?>
        </div>
        <p><a href="<?php echo site_url('posts/'.$post['id']); ?>">View article</a></p>
        </div>
<?php endforeach; ?>