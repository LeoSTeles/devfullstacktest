<?php include('../config.php'); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta  http-equiv="X-UA-Compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../style/css/bootstrap.min.css">
	<title>Pokédex</title>
</head>
<body class="bd-pokedex">

	<nav class="navbar fixed-top navbar-dark bg-dark">
	  <div class="container-fluid">
	    <a class="navbar-brand"><img src="../images/pokeball-logo.png"> POKÉDEX</a>
	  </div>
	</nav>
	
	<div class="corpo-pokedex">
		<section>
			<ol id="pokedex"></ol>
		</section>
	</div>
</body>
<script src="../scripts/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>