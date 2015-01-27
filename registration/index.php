<html>
<head>
<meta charset="utf-8">
<title>Регистрация</title>
<style>
body {
	background: #c7b39b url(../detki1.jpg);
	background-size: 100%;
}

.block2 {
	margin-top: 250px;
}

pre {
	align: center;
	color: #0000FF;
	font-size: 200%;
}
</style>
</head>
<body>
	<div align="center" class="block2">
		<pre>
			<em> Давай познакомимся!)
	<form action="../lk/index.php" method="post"
					enctype="multipart/form-data">
Как тебя зовут?
<input type="text" placeholder="Имя" name="name"> <br>
А фамилия?
<input type="text" placeholder="Фамилия" name="surname"> <br>
А отчество?
<input type="text" placeholder="Отчество" name="patronymic"><br>
В каком классе ты учишься?
<select name="grade">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
</select> <br> 
Я хочу на тебя посмотреть!
<input type="file" name="photo"> <br>
Введи пароль!)
<input type="password" placeholder="Пароль" name="password">
<input type="hidden" name="from" value="reg">
<input value="Ура!!!" type="submit">
	</form>
	</em>
	
	
	
	
	
	
	
	
	
	</div>
</body>
</html>