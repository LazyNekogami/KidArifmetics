<?php
$data = simplexml_load_file ( '../database.xml' );
?>
<html>
<head>
<meta charset="utf-8">
<title>Результаты</title>
<style>
body {
	background: #c7b39b url(../detki1.jpg);
	background-size: 100%;
}
.tab{ margin: 15%;}
</style>
</head>
<body>
<?php
$from = ( string ) $_POST ["from"];
$id = $_POST ["id"];
$chosenOne = $_POST ["chosenTest"];
$right = $_POST ["right"];
$results = $data->kids->kid [$id]->results;

if ($from == 'tests') {
switch ($chosenOne) {
		case 'add' :
			$results->add = $right;
			break;
		case 'sub' :
			$results->sub = $right;
			break;
		case 'mult' :
			$results->mult = $right;
			break;
		case 'div' :
			$results->div = $right;
			break;
	}
}
?>
<div align="center" class="tab">
<table border=2px cellpadding=2px>
		<tr>
			<td>Add</td>
			<td>Sub</td>
			<td>Mult</td>
			<td>Div</td>
		</tr>
		<tr>
			<td> <?php echo($results->add) ?> </td>
			<td> <?php echo($results->sub) ?> </td>
			<td> <?php echo($results->mult) ?> </td>
			<td> <?php echo($results->div) ?> </td>
		</tr>

	</table>
</div>
</body>
</html>