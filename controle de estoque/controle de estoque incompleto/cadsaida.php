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

<form name="cadsaida" method="POST" action="cadastrandoS.php">
<h2>Cadastro de saida</h2>

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

Retirante
<input id="campo" type="text" name="retirante">
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