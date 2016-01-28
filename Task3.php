<?php

function get_value($array, $key, $default = null) {
	return isset($array[$key]) ? $array[$key] : $default;
}
$number = get_value($_POST, 'number');
$convertGradus = get_value($_POST, 'gradus');
$result = 0;


if ($convertGradus == "CtoF") {
	$result = (9 / 5) * $number + 32;
} else if ($convertGradus == "FtoC") {
	$result = (5 / 9) * ($number - 32);
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Gradus Calculator</title>
</head>
<body>
	<div>
		<form action="" method="post">
			<div>
			<input type="text" name="number"/>
			<select name="gradus" id="gradus">
				<option value="CtoF">Celsius to Fahrenheit</option>
				<option value="FtoC">Fahrenheit to Celsius</option>
			</select>
			</div>
			<div>
			<button type="submit" >Calculate</button>
			</div>
		</form>
	</div>
	<?php if (isset($number)) : ?>
		
			<p>The result is  <?= $result ?>.</p>
		
	<?php endif; ?>
</body>
</html>