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
			<h2>Hobbies</h2>
			<div class="hobby">
				<h3>Extreem strijken</h3>
				<p>Strijken op extreme plaatsen. Voorbeelden: Strijken in een helicopter, strijken bij een actieve vulkaan enz.</p>
				<img src="img/extreemstrijken.jpg" alt="extreem strijken">
			</div>
			<div class="hobby">
				<h3>Hond kleuren</h3>
				<p>Geef je hond een kleurijke make-over</p>
				<img src="img/hond.jpg" alt="hond kleuren">
			</div>
			<div class="hobby">
				<h3>Mooo-off</h3>
				<p>Wie kan het beste loeien als een koe?</p>
				<img src="img/moooff.jpg" alt="mooo-off">
			</div>
			<div class="hobby">
				<h3>Kever vechten</h3>
				<p>Wie heeft de sterkste kever</p>
				<img src="img/bug.jpg" alt="kever vechten">
			</div>
		</div>
	</main>
</body>
</html>
<?php 
	require_once "footer.php";
?>