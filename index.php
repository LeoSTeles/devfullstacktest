<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta  http-equiv="X-UA-Compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href="<?php INCLUDE_PATH; ?>style/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
	<title>Pokedex</title>
</head>
<body class="bd">
	<section class="banner">
		<img src="<?php INCLUDE_PATH; ?>images/pokedex_logo.webp">
	</section>

	<div class="pokeball">
        <div class="bola-central metade-acima"></div>
        <div class="divisao"></div>
        <div class="circulo-central circulo-central-fora">
            <div class="circulo-central circulo-central-dentro">
            	<a href="<?php INCLUDE_PATH; ?>pages/">Press</a>
            </div>
        </div>
        <div class="bola-central metade-abaixo"></div>
    </div>

<script src="app.js"></script>
</body>
</html>