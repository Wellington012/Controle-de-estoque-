<html>
<head>
<title>CadastrandoC</title>
</head>
<body>

<?php
	try {
		$dns = "mysql:dbname=controle;host=localhost";
		$user = "root";
		$pass = "";
		$pdo = new PDO($dns, $user, $pass);
		echo "Sucesso";
	}catch (PDOException $e){
		echo "Falha: ". $e->getMessage();
	}



$nome= $_POST['nome'];


$pdo->query("INSERT INTO cadcategoria SET nome= '$nome'");
echo "<center><h1>Cadastro Efetuado com Sucesso</h1></center>";


?>

</body>
</html>