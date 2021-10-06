
<html>
<head>
<title>CadastrandoF</title>
</head>
<body>

<?php
	try {
		$dns = "mysql:dbname=controle;host=localhost";
		$user = "root";
		$pass = "";
		$pdo = new PDO($dns, $user, $pass);
	}catch (PDOException $e){
		echo "Falha: ". $e->getMessage();
	}



$nome =$_POST['nome'];
$telefone =$_POST['telefone'];
$estado =$_POST['estado'];
$cidade =$_POST['cidade'];

$pdo->query("INSERT INTO cadfornecedor SET nome= '$nome', telefone= '$telefone', estado= '$estado', cidade= '$cidade'");
echo "<center><h1>Cadastro Efetuado com Sucesso</h1></center>";
?>

</body>
</html>