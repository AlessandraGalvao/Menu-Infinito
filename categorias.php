<?php
require_once("config.php");

$nome = isset($_POST["nome"])?$_POST["nome"]:"";
$pai = isset($_POST["pai"])?(int)$_POST["pai"]:0;

?>

<html>
<body>

<h1>Listagem de Categorias</h1>

<?php
	$tb = $conn->query("select * from categorias where id_pai=0");
	$tb->execute();
	echo "<ul>";
	while($l = $tb->fetch(PDO::FETCH_ASSOC)){
		echo "<li>$l[nm_categoria]</li>";
		lista_filhos($l["id_categoria"],$indentacao);
	}
	$tb = null;
	echo "</ul>";
?>

</body>
</html>