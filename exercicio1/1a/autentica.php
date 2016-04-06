<<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="autentica.php" >
		Usuario : <?php echo $_POST["usuario"];?><br>
		Senha: <?php echo $_POST["senha"];?>
		<?php
			$cookie_name = $_POST["usuario"];
			$cookie_value = $_POST["senha"];
			setcookie($cookie_name, $cookie_value), time() + (86400 * 30), "/");
			if(!isset($_COOKIE[$cookie_name])) {
				echo "cookie named'" . $cookie_name . "' is not set!";
			} else {
				echo "Cooke '" . $cookie_name . "' is set!<br>";
				echo "Value is: " . $_COOKIE[$cookie_name];
			}
		?>

	</form>
</body>
</html>