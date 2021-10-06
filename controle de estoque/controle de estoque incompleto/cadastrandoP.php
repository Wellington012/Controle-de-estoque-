<html>
<head>
<title>CadastrandoP</title>
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



$categoria= $_POST['categoria'];
$nome= $_POST['nome'];
$estoque_minimo= $_POST['estoque_minimo'];
$estoque_atual= $_POST['estoque_atual'];

$pdo->query("INSERT INTO cadprodutos SET categoria= '$categoria', nome= '$nome', estoque_minimo = '$estoque_minimo', estoque_atual = '$estoque_atual'");
echo "<center><h1>Cadastro Efetuado com Sucesso</h1></center>";


?>

</body>
</html>