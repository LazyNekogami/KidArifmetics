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
				for($i=0; $i < $data.length; $i++) {
					$kid = $data[$i];
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
// 				foreach ( $data->kid as &$kid ) {
// 					if ($kid ['id'] == $id) {
// 						if ($pass == ( string ) $kid->password) {
// 							$flag = true;
// 							$person = $kid;
// 						} else {
// 							echo ('<p>Неверный логин или пароль</p>');
// 						}
// 						break;
// 					}
// 				}
				break;
			case "reg" :
				// -------------------------From registration page
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
	<p> Привет, <?php echo($person->name) ?></p>
	<img src=<?php echo("'".$person->photo."'") ?> alt='photo'>


	<!-- Results button  -->

	<form action="../results/index.php" method="post">
		<input type="hidden" name="from" value="lk"> <input type="hidden"
			name="id" value=<?php echo("'".$person[id]."'") ?>>
		<!-- ------ -->
		<button type="submit">Ok</button>
		</br>
	</form>


	<!-- Tests button -->

	<form action="../tests/index.php" method="post">
		<input type="hidden" name="from" value="lk"> <input type="hidden"
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
		$file = fopen ( "../database.xml", "w" );
		fwrite ( $file, $data->asXML () );
		fclose ( $file );
		?>
		
	</body>
</html>
