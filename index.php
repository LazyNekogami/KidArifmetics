<html>
<head>
<meta charset="utf-8">
<title>Арифметика</title>
<style>
body {
	background: #c7b39b url(detki1.jpg);
	background-size: 100%;
}

.block1 {
	margin-top: 200px;
	margin-bottom: 50px;
}

.block2 {
	padding: 50px;
	margin: 1%;
}

.block3 {
	margin: 1%;
}

pre {
	color: #0000FF;
	font-size: 200%;
}

.winx {
	padding: 15px;
	margin-right: 520px;
	margin-left: 520px;
	background: #aa0000;
}

.winx2 {
	padding: 15px;
	margin-right: 520px;
	margin-left: 520px;
	background: #dddd00;
}
</style>
</head>
<body>
	<div class="block1">
		<div align="center" class="block2">
			<pre> <em>Дорогой друг!
 Рад видеть тебя здесь!
 Мы с тобой уже знакомы?
 Если нет, </em>
			</pre>
			<form action="registration/index.php">
				<div class="winx2">
					<input value="Жми сюда!" type="submit">
				</div>
			</form>
		</div>
		<div align="center" class="block3">
			<pre> <em> Если да, то введи, пожалуйста, своё имя!
Вот сюда</em>
			</pre>

			<form action="lk/index.php" method="post">
				<div class="winx">
					<input type="text" name="id">
				</div>
				<pre> <em>И свой пароль</em>
				</pre>
				<div class="winx">
					<input type="text" name="password">
				</div>
				<input type="hidden" name="from" value="main"> <br>
				<div class="winx2">
					<input value="Войти" type="submit">
				</div>
			</form>
		</div>
	</div>
</body>
</html>