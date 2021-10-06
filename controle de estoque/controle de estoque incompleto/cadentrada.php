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

<form name="cadentrada" method="POST" action="cadastrandoE.php">
<h2>Cadastro de entrada</h2>

<br>
<br>

<label for="data">Data:</label>
<input type="date" id="data" name="data">
<br><br>

Categoria<select name="categoria">
<option value="informatica">informatica</option>
<option value="acessorios">acessorios</option>
<option value="hardware">hardware</option>
<option value="software">software</option>
</select>
<br>
<br>
Produto<select name="produto">
<option value="informatica">informatica</option>
<option value="acessorios">acessorios</option>
<option value="hardware">hardware</option>
<option value="software">software</option>
</select>
<br>
<br>

fornecedor
<select name="fornecedor">
<option value="asus">asus</option>
<option value="lenovo">lenovo</option>
<option value="intel">intel</option>
<option value="microsoft">microsoft</option>
</select>

<br>
<br>

Quantidade
<input id="campo1" type="text" name="quantidade">
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