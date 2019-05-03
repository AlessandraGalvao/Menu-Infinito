<?php
require_once("config.php");

?>

<html>
<body>

<form action="cadastro.php" method="post">
Nome da Categoria <input type="text" size="30" name="nome"><br>

Selecione o Pai
<select name="pai">
<option value="0">Categoria Primária</option>

<?php
	$tb = $conn->query("select * from categorias where id_pai=0");
	$tb->execute();
	while($l = $tb->fetch(PDO::FETCH_ASSOC)){
		echo "<option value='$l[id_categoria]'>$l[nm_categoria]</option>";
	}
        $tb = null;
        
        
?>

</select>
<input type="submit" value="Cadastrar" name="submit">
</form>
</body>
</html>