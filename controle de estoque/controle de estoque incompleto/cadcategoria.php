<html>
<head>
<title>  </title>
<script type="text/javascript">
function limpar(){
	if(document.getElementById('campo').value!=''){
		document.getElementById('campo').value='';
		document.getElementById('campo1').value='';


	}
}
</script>
</head>
<body>

<form name="cadcategoria" method="POST" action="cadastrandoC.php">
<h2>Cadastro de categoria</h2>
<br>

nome
<input id="campo" type="text" name="nome">

<br><br>

<input type="submit" value="enviar dados"/>
<br>


</form>
<button onclick="limpar()">Limpar dados</button>

			</td>
		</tr>


	</table>


</body>
</html>