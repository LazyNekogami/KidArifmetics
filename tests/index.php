<html>
<head>
<script type="text/javascript">
alert('pre isRight');
function isRight(){
	alert('isRight!');
	if(text.value == c){alert('right')};
};

		var span = document.getElementById("span");
		var text = document.getElementById("text");
		var a,b,c;
		var button = document.getElementById("ok");
		//isRight();
		//alert('afrer isRight');
		//button.onclick = isRight;
	
</script>
</head>
<body>
	<span id="span"> </span>
	</br>
	<input type="text" id="text">
	</br>
	<button  id="ok">Ok!</button>
		<?php
		$chosenOne = $_POST ["chosenTest"];
		$right = 0; 
		$total = 0;
		switch ($chosenOne) {
			case "add" :
				{
					?>
				<script>
					a = Math.floor( Math.random()*100);
					b = Math.floor( Math.random()*100);
					c = a+b;
					span.textContent = a+"+"+b+"="+"(temporary "+c+")";					
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