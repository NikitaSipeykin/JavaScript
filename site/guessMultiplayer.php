<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript"> 

		var answer = parseInt(Math.random() * 1000);
		var tryCount = 0;
		var player = 1;

		function readInt(){
			var number = document.getElementById("userAnswer").value;
			return parseInt(number);
		}

		function write(text){
			document.getElementById("info").innerHTML = text;
		}

		function hide(id){
			document.getElementById(id).style.display = "none";
		}
		function game(){
			if(player == 1){ 
				tryCount++;
				guess(1);
				player = 2;
			}
			else if(player == 2){
				guess(2);
				player = 1;
			}
		}
		function guess(playerNumber){
			playerNumber = playerNumber;
			var userAnswer = readInt();
			if(userAnswer == answer){
				write("<b>Поздравляю игрок " +playerNumber+ "угадал </b> Ему понадобилось " +tryCount+ " попыток.")
				hide("button");
				hide("userAnswer");
			}		
			else if(userAnswer > answer){
				write("Игрок " +playerNumber+ " ввел слишком большое число<br>Следующий игрок<br>Введите число от 1 до 1000<br> ");
			}
			else if(userAnswer < answer){
				write("Игрок " +playerNumber+ " ввел слишком маленькое число<br>Следующий игрок<br>Введите число от 1 до 1000<br>");
			}
		}
	</script>
</head>
<body>
<div class="content">
	<?php
		include "menu.php";
	?>	
	<div class="contentWrap">
		<div class="content">
			<div class="center">

				<h1>Игра угадайка</h1>

				<div class="box">

					<p id="info">Игра рассчитана на двух играков, играем по очереди первым начинает - игрок 1<br> Угадайте число от 0 до 1000</p>
					<input type="text" id="userAnswer">
					<br>
					<a href="#"onClick="game();" id="button">Начать</a>
				</div>

			</div>
		</div>
	</div>
</div>	

<div class="footer">
Copyright &copy; <?php echo date("Y");?> Sipeykin Nikita
</div>

</body>
</html>