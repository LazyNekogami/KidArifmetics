<?php
$data = simplexml_load_file ( '../database.xml' );
?>
<html>
<head>
<meta charset="utf-8">
<title>Личный кабинет</title>
<style>
body {
	background: #c7b39b url(../desk.jpg);
	background-size: 100%;
}

.pho {
	width: 550px;
	padding: 5px;
	float: right;
}

pre {
	align: center;
	color: #fff;
	font-size: 300%;
}

.slov {
	margin-top: 100px;
}

.slovv {
	margin-top: 10px;
	width: 200px;
	padding: 5px;
	float: left;
}

.radio {
	margin-top: 300px;
	margin-left: 200px;
	padding: 5px;
	clear: left;
}

p {
	color: #ffffff;
	font-size: 150%;
}

.rez {
	margin-left: 50px;
}
</style>
</head>
<body>
		<?php
		$from = ( string ) $_POST ["from"];
		$id = $_POST ["id"];
		$pass = $_POST ["password"];
		$flag = false;
		$person = null;
		switch ($from) {
			case "main" :
				foreach ( $data->kid as $kid ) {
					if ($kid ['id'] == $id) {
						if ($pass == ( string ) $kid->password) {
							$flag = true;
							$person = $kid;
						} else {
							echo ('<p>Неверный логин или пароль</p>');
						}
						break;
					}
				}
				break;
			case "reg" :
				$kid = $data->addChild ( 'kid' );
				$kid ['id'] = ++ $data->counter;
				$kid->addChild ( 'name', $_POST ['name'] );
				$kid->addChild ( 'surname', $_POST ['surname'] );
				$kid->addChild ( 'patronymic', $_POST ['patronymic'] );
				$kid->addChild ( 'grade', $_POST ['grade'] );
				$kid->addChild ( 'password', $_POST ['password'] );
				
				$adress = "../photos/" . $_FILES ["photo"] ["name"];
				if (copy ( $_FILES ["photo"] ["tmp_name"], $adress )) { /* echo("File uploaded successfully"); */
				}
				;
				$kid->addChild ( 'photo', $adress );
				$person = $kid;
				
				$file = fopen ( "../database.xml", "w" );
				fwrite ( $file, $data->asXML () );
				fclose ( $file );
				
				$flag = true;
				break;
		}
		if ($flag) {
			?>
		<input type="hidden" name="from" value="lk">
	<input type="hidden" name="id" value=<?php echo("'".$person[id]."'") ?>>
	<div class="slov">
		<div class="slovv">
			<pre align="left">
	Привет, <?php echo($person->name) ?>!
	Теперь ты готов
	испытать свои силы!
	Выбирай!)
	</pre>
		</div>
		<div class="pho">
			<img src=<?php echo("'".$person->photo."'") ?> width=500px
				alt='photo'>
			<div class="rez">
				<p>Твои результаты!)</p>
				<form action="../results/index.php" method="post">
					<input type="hidden" name="from" value="lk"> <input type="hidden"
						name="id" value=<?php echo("'".$person[id]."'") ?>>
					<!-- ------ -->
					<input value="Результаты" type="submit"> <br>
				</form>
			</div>
		</div>

	</div>


	<!-- Tests button -->
	<div align="left" class="radio">
		<form action="../tests/index.php" method="post">
			<input type="hidden" name="from" value="lk"> <input type="hidden"
				name="id" value=<?php echo("'".$person[id]."'") ?>> <input
				type="radio" value="add" name="chosenTest">
			<p>Сложение</p>
			</br> <input type="radio" value="sub" name="chosenTest">
			<p>Вычетание</p>
			</br> <input type="radio" value="mult" name="chosenTest">
			<p>Умножение</p>
			</br> <input type="radio" value="div" name="chosenTest">
			<p>Деление</p>
			</br> <input value="Поехали!" type="submit"> </br>
		</form>
	</div>

	<!-- Results button  -->

		<?php
		}
		$file = fopen ( "../database.xml", "w" );
		fwrite ( $file, $data->asXML () );
		fclose ( $file );
		?>
		
	</body>
</html>

