<html>
<head>
</head>
<body>
		<?php
		$chosenOne = $_POST ["chosenTest"];
		$right = 0;
		$total = 0;
		switch ($chosenOne) {
			case "add" :
				{
					?>
				<span id="span"> </span>
	</br>
	<input type="text" id="text">
	<button onClick="function(){}" id="ok">Ok!</button>

	<script>
					var span = document.getElementById("span");
					var text = document.getElementById("text");
					var a,b;
					a = Math.floor( Math.random()*100);
					b = Math.floor( Math.random()*100);
					c = a+b;
					span.attr("text",a+"+"+b+"="); 					
				</script>				
				<?php
				}
				break;
		}
		?>
	</body>
</html>

<?php
?>