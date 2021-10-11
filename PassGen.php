<!--Генератор паролей-->
<?php
if (isset($_POST["gen"])) {
$chars="qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP";
$max=$_POST['max'];
$password=null;
while($max--) $password.=$chars[rand(0, StrLen($chars)-1)];
echo
	'<center>
		Сгенерированный пароль:
		<hr>
		<font face=verdana color=red size=7><b>'.$password.'</b></font>
		<hr>
		<form action="genPath.php" method="POST">
			<h3 class="text1">Количество символов: <input type="number" min="1" max="24" value="15" name="max"></h3>
			<input type="submit" name="gen" value="Cгенерировать" class="button">
		</form>
	</center>';
} else {
echo
	'<html>
		<head>
			<title>Генератор паролей</title>
		</head>
		<body>
			<center>
				<form action="genPath.php" method="POST">
					<h3 class="text1">Количество символов: <input type="number" min="1" max="24" value="15" name="max"></h3>
					<input type="submit" name="gen" value="Cгенерировать" class="button">
				</form>
			</center>
		</body> 
	</html>';
}
?>