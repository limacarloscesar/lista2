<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="session.php" >
		
		<?php
			$_SESSION["user"] = $_POST["usuario"];
			$_SESSION["password"] = $_POST["senha"];

			echo "Usuario: " . $_SESSION["user"] ."<br>";
			echo "Senha: " . $_SESSION["password"] . "";
			session_unset();

		?>

	</form>
</body>
</html>