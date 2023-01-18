<?php
	$id = isset($_GET['id']) ? $_GET['id'] : null;
?>
<!DOCTYPE html>
<html>
	<?php include('include/head.php'); ?>
	<body>
		<?php
			$page = 'resources';
		 	include('include/header.php');
		?>
		<div class="resources clearfix">
			<main>
				<article>
					<?php
						if ($id) {
							foreach(glob('content/html/lessons/*.html') as $file) {
								if (strpos($file, $id) !== false) {
									include($file);
								}
							}
							echo '<h2 class="all-lessons"><a href="resources.php">See all lessons</a></h2>';
						} else {
							include('content/html/lessons.intro.html');
							foreach(glob('content/html/lessons/*.html') as $file) {
								include($file);
							}
						}
					?>
				</article>
			</main>
		</div>
		<?php include('include/footer.php'); ?>
		<?php include('include/scripts.php'); ?>
	</body>
</html>
