<html>
<head>
</head>
<body>
	<form action="../lk/index.php" method="post"
		enctype="multipart/form-data">
		<input type="text" placeholder="Фамилия" name="surname"> </br>
		<input type="text" name="name"> </br>
		<input type="text" name="patronymic"> </br>
		 <select name="grade">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
		</select> <br> <input type="file" name="photo"> <br> <input
			type="password" name="password"> <br> <input type="text"
			disabled="disabled" hidden="hidden" name="from" value="reg">
		<button type="submit"></button>
	</form>
</body>
</html>

