<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="content">
	<?php
		include "menu.php";
	?>	

	<h1>Личный сайт студента GeekBrains</h1>

	<div class="center">

		<img src="img/ph.png">

		<div class="box_text">
			<p><b>Привет!</b> Меня зовут <i>Никита</i>. Это мой первый сайт.</p>
			<p>В этом мне помог IT-портал <a href="https://geekbrains.ru">GeekBrains</a>.</p>
			<p>На этом сайте вы сможете сыграть в несколько игр, которые я написал:
				<a href="index.php">Главная</a>,
				<a href="puzzle.php">Загадки</a>,
				<a href="guess.php">Угадайка</a>.
			</p>
		</div>

	</div>

</div>	

<div class="footer">
Copyright &copy; <?php echo date("Y");?> Sipeykin Nikita
</div>

</body>
</html>