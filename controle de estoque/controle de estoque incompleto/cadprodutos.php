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

<form name="cadprodutos" method="POST" action="cadastrandoP.php">
<h2>Cadastro de Produtos</h2>

<br>



<br><br>

categoria<select name="categoria">
<option value="informatica">informatica</option>
<option value="acessorios">acessorios</option>
<option value="hardware">hardware</option>
<option value="software">software</option>
</select>
<br>
<br>


nome
<input id="campo" type="text" name="nome">

<br><br>
estoque minimo
<input id="campo" type="text" name="estoque minimo">
<br>
<br>

estoque atual
<input id="campo1" type="text" name="estoque atual">
<br><br>
<input type="submit" value="enviar dados"/>
<br>




<br>


</form>
<button onclick="limpar()">Limpar dados</button>

			</td>
		</tr>


	</table>


</body>
</html>