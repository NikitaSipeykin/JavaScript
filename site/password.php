<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript">
		var characters = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","M","X","Y","Z",",",".","!","@","/","&","?","1","2","3","4","5","6","7","8","9","0","$","%","#"];

		function readInt(){
			var number = document.getElementById("passwordLength").value;
			return parseInt(number);
		}
		function write(text){
			document.getElementById("info").innerHTML = text;
		}
		function generatorRandomPassword(){
			var passwordLength = readInt();			
			var password = "";
			for(var i = 0; i < passwordLength; i++){
				var randomNumber = parseInt(Math.random() * 100);
				if(randomNumber < 70){
					password = password + characters[randomNumber];
				}
				else{
					i--;
				}
			}
			write("Ваш пароль: " + password);
			hide("button");
			hide("userAnswer");
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

				<h1>Генератор паролей</h1>

				<div class="box">

					<p id="info">Введите длинну пароля</p>
					<input type="text" id="passwordLength">
					<br>
					<a href="#"onClick="generatorRandomPassword();" id="button">Начать</a>

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