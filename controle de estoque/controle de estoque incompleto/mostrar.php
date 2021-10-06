<!DOCTYPE html>
<html>
	<head>
		<title>Dropdown Menu</title>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
<style type="text/css">
*{
	margin: 0;
	padding: 0;
}
body{
	background: #eee;
	font-size: 16px;
	font-family: sans-serif,arial;
}
header{
	width: 1000px;
	height: 120px;
	margin: 0 auto;
	position: relative;
}
.logo{
	position: absolute;
	left: 20px;
	top: 30px;
}
.nav{
	width: 1000px;
	height: 60px;
	margin: 0 auto;
	border-radius: 5px;
}
ul li{
	list-style: none;
	width: 200px;
	line-height: 60px;
	position: relative;
	background: #222;
	box-shadow: 0px 2px 5px 0px grey;
	text-align: center;
	float: left;
	background: linear-gradient(darkred 20%,black 80%);
}
ul li ul{
	position: absolute;
}
.nav > ul > li:nth-of-type(1){
	border-radius: 5px 0px 0px 5px;
}
.nav > ul > li:nth-of-type(5){
	border-radius: 0px 5px 5px 0px;
}
ul li a{
	color: #fff;
	width: 200px;
	height: 58px;
	display: inline-block;
	text-decoration: none;
}
ul li a:hover{
	font-weight: bold;
	border-bottom: 2px solid #fff;
}
ul li ul{
	display: none;
}
.nav ul li:hover ul{
	display: block;
}
.fa{
	margin-right: 5px;
}
.fa-list.modify{
	display: none;
	font-size: 35px;
	position: absolute;
	right: 30px;
	top:60px;
	cursor: pointer;
}
.container{
	width: 1000px;
	height: 200px;
	margin: 0 auto;
	padding:20px 20px;
}
@media screen and (max-width: 480px){
	header{
		width: 100%;
	}
	.nav{
		display: none;
		width: 100%;
		height: auto;
	}
	ul li{
		width: 100%;
		float: none;
	}
	ul li a{
		width: 100%;
		display: block;
	}
	ul li ul{
		position: static;
	}
	ul li ul li a{
		background: #222;
	}
	.fa-list.modify{
		display: block;
	}
	.container{
		width: 100%;
		height: auto;
	}
	body{
		overflow-x:hidden;
	}
}
</style>
<body>


<nav class="nav">
	<ul>
		<li><a href="#">Produtos</a>
		<ul>
				<li><a href="#">Cadastro de Categoria</a></li>
				<li><a href="#">Cadastro de Produtos</a></li>
				<li><a href="#">Lista de Produtos</a></li>
			</ul>
		
		<li><a href="#"></span>Estoque</a>
			<ul>
				<li><a href="#">Entrada de material</a></li>
				<li><a href="#">Saida de material</a></li>
				</ul>
		</li>
		<li><a href="#">Fornecedores</a>
		<ul>
				<li><a href="#">Cadastro de fornecedores</a></li>
				<li><a href="#">Listar fornecedores</a></li>
				</ul>
		
		<li><a href="#">Retirantes</a>
		<ul>
				<li><a href="#">Cadastro de retirante</a></li>
				<li><a href="#">Listar retirantes</a></li>
			</ul>
		
		<li><a href="#">Relatorios</a>
		<ul>
				<li><a href="#">Produtos</a></li>
				<li><a href="#">Fornecedores</a></li>
		<li><a href="#">Retirantes</a></li>
		<li><a href="#">Entrada</a></li>
		<li><a href="#">Saida</a></li>
			</ul>
	</ul>
</nav>

<section class="container">
<h1>Welcome to RK Tutorial</h1>
<p>Hello, Everyone How are you ??</p>
</section>
<?php
	try {
		$dns = "mysql:dbname=controle;host=localhost";
		$user = "root";
		$pass = "";
		$pdo = new PDO($dns, $user, $pass);

	}catch (PDOException $e){
		echo "Falha: ". $e->getMessage();
	}

	$mostra = $pdo->query("SELECT * FROM cadprodutos");
	
	echo "<table border='1'>";
		echo "<h1>Produtos</h1>";
		echo "<tr>";
		echo "<td>Nome</td>";
		echo "<td>Categoria</td>";
		echo "<td>Estoque Minimo</td>";
		echo "<td>Estoque Atual</td>";
		echo "</tr>";
	foreach ($mostra->fetchAll() as $key) {

		echo "<tr>";
		echo "<td>".$key['nome']."</td>";
		echo "<td>".$key['categoria']."</td>";
		echo "<td>".$key['estoque_minimo']."</td>";
		echo "<td>".$key['estoque_atual']."</td>";
		echo "</tr>";
		
	
	}
	$mostra2 = $pdo->query("SELECT * FROM cadfornecedor");
	
	echo "<table border='1'>";
		echo "<h1>Fornecedores</h1>";
		echo "<tr>";
		echo "<td>Nome</td>";
		echo "<td>Telefone</td>";
		echo "<td>Estado</td>";
		echo "<td>Cidade</td>";
		echo "</tr>";
	foreach ($mostra2->fetchAll() as $key) {

		echo "<tr>";
		echo "<td>".$key['nome']."</td>";
		echo "<td>".$key['telefone']."</td>";
		echo "<td>".$key['estado']."</td>";
		echo "<td>".$key['cidade']."</td>";
		echo "</tr>";
		
	
	}

?>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
	var menu = false;
	$(".fa-list.modify").click(function(){
		if(menu == false){
			$(".nav").fadeIn();
			menu = true;
		}else{
			$(".nav").fadeOut();
			menu = false;
		}
	})	

</script>