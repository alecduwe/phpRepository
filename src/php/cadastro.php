<html>
<head>
</head>
<body></body>
<form action="cadastroo.php" method="POST">
<center>Cadastro</center>
Entre com username: <input type="text" name="username" size="35">
<br>
<input type="submit" value="enviar">
</html>

<?php
	$username=$_POST["username"];
	
	$db = new mysqli ("localhost","root","","Demo");

	if($db-> connect_error > 0)
		die ('erro ao tentar conectar [' .$db -> connect_error .']');
	else
	{
		$sql="insert into users (username) values ('$username')";
		if(!$result = $db -> query($sql))
		{
			die("Há um erro na execução da query [". $db->error."]");
		}
		else
		{		
		echo "erro ao inserir";
		}

			$db-> close();
	}
?>

	
