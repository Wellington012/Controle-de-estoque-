<html>
<head>
<title>CadastrandoR</title>
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
$empresa =$_POST['empresa'];


$pdo->query("INSERT INTO cadretirante SET nome= '$nome', empresa= '$empresa'");
echo "<center><h1>Cadastro Efetuado com Sucesso</h1></center>";
?>

</body>
</html>