<html>
<head>
<title>CadastrandoS</title>
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


$data= $_POST['data'];
$categoria= $_POST['categoria'];
$produto= $_POST['produto'];
$retirante= $_POST['retirante'];
$quantidade= $_POST['quantidade'];

$pdo->query("INSERT INTO cadsaida SET data= '$data', categoria= '$categoria', produto= '$produto', retirante= '$retirante', quantidade= '$quantidade'");
echo "<center><h1>Cadastro Efetuado com Sucesso</h1></center>";


?>

</body>
</html>