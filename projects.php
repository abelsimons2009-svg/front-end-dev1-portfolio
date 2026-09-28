<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<title>Mijn portfolio</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php
		require_once "header.php";
	?>
	<main>
		<div class="wrapper">
			<h2>Projecten</h2>
			<div class="project"><?php
			echo file_get_contents('data/project1.txt');
		?></div>
		<div class="project"><?php
			echo file_get_contents('data/project2.txt');
		?></div>
		<div class="project"><?php
			echo file_get_contents('data/project3.txt');
		?></div>
		</div>
	</main>
</body>
</html>
<?php 
	require_once "footer.php";
?>