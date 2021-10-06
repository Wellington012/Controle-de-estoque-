<html>
<head>
<title>CadastrandoE</title>
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
$fornecedor= $_POST['fornecedor'];
$quantidade= $_POST['quantidade'];

$pdo->query("INSERT INTO cadentrada SET data= '$data', categoria= '$categoria', produto= '$produto', fornecedor= '$fornecedor', quantidade= '$quantidade'");
echo "<center><h1>Cadastro Efetuado com Sucesso</h1></center>";


?>

</body>
</html>