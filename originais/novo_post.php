<?php
include "verifica.php";
include "header.php";

$msg = "";
$titulo = "";
$texto = "";

if (sizeof($_POST)>0){
	if ($_POST["titulo"] != "" && $_POST["texto"] != ""){
		include "conectadb.php";
		$titulo = $_POST["titulo"];
		$texto = $_POST["texto"];
		$id_usuario = $_SESSION["id_usuario"];
		
		$q = "insert into post (titulo, texto, id_usuario)
			values ('$titulo', '$texto', $id_usuario)";
			
		$res = mysql_query($q);
		if ($res) {
			$msg = "<h3>Post registrado com sucesso</h3>";
		}else{
			$msg = "<h3>Erro ao registrar Post</h3>";
		}
	}else{
		$msg = "<h3>Preencha todos os campos</h3>";
	}
}
?>

<h3>Novo Post</h3>
<form method="post">
	<p>Título: <input name="titulo" type="text" size="62" /></p>
	<p>
		Texto: 
		<textarea style="vertical-align: top;" name="texto" cols="60" rows="10"></textarea>
	</p>
	<input type="submit" value="Enviar" />
</form>
<?=$msg?>
<?php
include "footer.php";
?>