<?php

function get_value($array, $key, $default = null) {
	return isset($array[$key]) ? $array[$key] : $default;
}
$firstNumber = get_value($_POST, 'firstNumber');
$secondNumber = get_value($_POST, 'secondNumber');
$calculateSymbol= get_value($_POST, 'calc');
$result = 0;


if ($calculateSymbol == "+") {
	$result = $firstNumber + $secondNumber;
} else if ($calculateSymbol == "-") {
	$result = $firstNumber - $secondNumber;
} else if ($calculateSymbol == "*") {
	$result = $firstNumber * $secondNumber;
}else if ($calculateSymbol == "/") {
	if ($secondNumber != 0) {
		$result = $firstNumber / $secondNumber;
	}
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Calculator</title>
</head>
<body>
	<div>
		<form action="" method="post">
			<div>
			<input type="text" name="firstNumber"/>
			<input type="text" name="secondNumber"/>
			<select name="calc" id="calculate">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">*</option>
				<option value="/">/</option>
			</select>
			</div>
			<div>
			<button type="submit" >Calculate</button>
			</div>
		</form>
	</div>
	<?php if (isset($firstNumber) && isset($secondNumber)) : ?>
		<?php if ($secondNumber == 0) : ?>
			<p>Can't divide by 0.</p>
			<?php else : ?>
			<p>The result of  <?= $firstNumber ." ".  $calculateSymbol ." ".  $secondNumber ." = ". $result ?></p>
		<?php endif; ?>
	<?php endif; ?>
</body>
</html>