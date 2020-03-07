<?php
$hostdb="localhost";
$userdb="root";
$senhadb="";

$conexao = mysql_connect($hostdb,$userdb,$senhadb);
$db = mysql_select_db("blog",$conexao); 

if(!$db){
	echo "<h3>Não foi possível se conectar com o Banco de Dados</h3>";
}
?>