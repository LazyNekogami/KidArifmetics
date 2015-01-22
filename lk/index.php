<?php
$data = simplexml_load_file ( '../database.xml' );
?>
<html>
<head>
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
				// ------------------------Logging in
				foreach ( $data->children->kid as &$kid ) {
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
				// -------------------------From registration page
				$kid = $data->children->addChild ( 'kid' );
				$kid ['id'] = ++ $data->children ['counter'];
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
				
				$file = fopen ( "database.xml", "w" );
				fwrite ( $file, $data->asXML () );
				fclose ( $file );
				
				$flag = true;
				break;
		}
		if ($flag) {
			?>
		<input type="text" disabled="disabled" hidden="hidden" name="from"
		value="lk">
	<input type="text" disabled="disabled" hidden="hidden" name="id"
		value=<?php echo("'".$person[id]."'") ?>>
	<p> Привет, <?php echo($person->name) ?></p>
	<img src=<?php echo("'".$person->photo."'") ?> alt='photo'>

	<form action="../results/index.php" method="post">
		<input type="text" disabled="disabled" hidden="hidden" name="from"
			value="lk"> <input type="text" disabled="disabled" hidden="hidden"
			name="id" value=<?php echo("'".$person[id]."'") ?>>
		<!-- ------ -->
		<button type="submit">Ok</button>
		</br>
	</form>

	<form action="../tests/index.php" method="post">
		<input type="text" disabled="disabled" hidden="hidden" name="from"
			value="lk"> <input type="text" disabled="disabled" hidden="hidden"
			name="id" value=<?php echo("'".$person[id]."'") ?>>
		<!-- ------ -->
		<input type="radio" value="add" name="chosenTest"> </br> <input
			type="radio" value="sub" name="chosenTest"> </br> <input type="radio"
			value="mult" name="chosenTest"> </br> <input type="radio" value="div"
			name="chosenTest"> </br>
		<button type="submit">Ok</button>
		</br>
	</form>
		
		
		
		<?php
		}
		$file = fopen ( "database.xml", "w" );
		fwrite ( $file, $data->asXML () );
		fclose ( $file );
		?>
		
	</body>
</html>
