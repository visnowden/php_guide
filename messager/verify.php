<?php
	$hostname = "127.0.0.1";
	$user = "root";
	$password = "";
	$database = "web";

	$conexao = new mysqli($hostname, $user, $password, $database);

	if ($conexao->connect_errno) {
		echo "Failed to connect to MySQL: " . $conexao->connect_error;
		exit();
	} else {
		$user_name = $conexao->$_POST['user'];
		$password = $conexao->$_POST['pass'];

		// $user_name = $conexao -> real_escape_string($_POST['user']);
		// $password = $conexao -> real_escape_string($_POST['pass']);

		$sql = "INSERT INTO `web`.`user`
								(`user_name`, `password`, `registration_date`, `active`)
							VALUES
								('" . $user_name . "', '" . $password . "', '" . date('Y-m-d') . "', true);";

		$resultado = $conexao->query($sql);

		$conexao->close();
		header('Location: index.php', true, 301);
	}