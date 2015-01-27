<html>
<head>
</head>
<body>

	<span id="span"> </span>
	</br>
	<input type="text" id="text">
	</br>
	<button id="ok">Ok!</button>
	<form action="../results/index.php" method="post">
		<span id="right" name="right"> </span> </br> <span id="total"> </span> </br>
		<button id="submit" type="submit"></button>

		<input type="hidden" name="from" value="tests"> </br> <input
			type="hidden" name="id" value=<?php echo("'".$POST['id']."'") ?>> </br>
		<input type="hidden" name="chosenTest"
			value=<?php echo("'".$POST['chosenTest']."'") ?>> </br>
	</form>
	
		<?php
		$chosenOne = $_POST ["chosenTest"];
		switch ($chosenOne) {
			case "add" :
				{
					?>
					<script src="addition.js">									
					</script>				
					<?php
				}
				break;
			case "sub" :
				{
					?>
					<script src="substraction.js">									
					</script>				
					<?php
				}
				break;
			case "mult" :
				{
					?>
					<script src="multiplication.js">									
					</script>				
					<?php
				}
				break;
			case "div" :
				{
					?>
					<script src="division.js">									
					</script>				
					<?php
				}
				break;
		}
		?>
	</body>
</html>
