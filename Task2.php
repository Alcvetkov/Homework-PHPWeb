<?php

function get_value($array, $key, $default = null) {
	return isset($array[$key]) ? $array[$key] : $default;
}
$user = get_value($_POST, 'user');
$pass= get_value($_POST, 'pass');
$rePass= get_value($_POST, 'rPass');
$result = "";
$isCorrect = false;

echo $user . '  ' . $pass;

if ($pass == $rePass) {
	
	$isCorrect = true;
	$result = md5($pass);

}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<style>
	label {
		display: block;
	}
</style>
</head>
<body>
	<div>
		<form action="" method="post">
			<div>
				<label for="user">User name:</label>
				<input type="text" name="user"/>
			</div>
			<div>
				<label for="pass">Password:</label>
				<input type="password" name="pass"/>
			</div>
			<div>
				<label for="rPass">Repeat password:</label>
				<input type="password" name="rPass"/>
			</div>
			<div>
			<button type="submit" >Register</button>
			</div>
		</form>
	</div>

	
	<?php if (isset($pass) && isset($rePass)) : ?>
		<?php if ($isCorrect) : ?>
			<p>The user name is <strong><?= $user ?></strong> and the password is <strong><?= $result ?></strong>.</p>
			<?php else : ?>
			<p>The password and the repeated passwprd are not the same.</p>
		<?php endif; ?>
	<?php endif; ?>
</body>
</html>