<?php ob_start(); ?>
<h2>Список постов</h2>
	<ol>
		<?php foreach ($posts as $post): ?>
			<li>
				<a href="/kuzina/index.php/show?id=<?php echo $post['id'];?>">
					<?php echo $post['title'];?>
				</a>

			</li>
		<?php endforeach; ?>

	</ol>
<?php $content=ob_get_clean(); ?>

<?php require "View/Templates/layout.php"; 