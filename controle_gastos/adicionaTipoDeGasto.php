<?php

require_once('class/TipoGasto.php');
session_start();


if (isset($_POST['descricao'])){
	$descricaoTipoGasto = $_POST['descricao'];
	
	$_SESSION['tiposDeGasto'][] = new TipoGasto($descricaoTipoGasto);
	
	var_dump($_SESSION['tiposDeGasto']);
	
	
}


?>