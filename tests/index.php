<html>
<head>
</head>
<body>

	<span id="span"> </span>
	</br>
	<input type="text" id="text">
	</br>
	<button id="ok">Ok!</button>
	<form action="" method="post">
		<span id="right"> </span> </br> <span id="total"> </span> </br>
		<button id="submit" hidden="ture" type="submit"> </button>
	</form>
	
		<?php
		$chosenOne = $_POST ["chosenTest"];
		$right = 0;
		$total = 0;
		switch ($chosenOne) {
			case "add" :
				{
					?>
				<script src="addition.js">									
				</script>				
				<?php
				}
				break;
		}
		?>
	</body>
</html>
