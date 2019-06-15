<?php

require_once('class/FormaDePagamento.php');
session_start();

if (isset($_POST['descricao']) && isset($_POST['avista']) && isset($_POST['prazo'])) {
	$descricaoPagamento = $_POST['descricao'];
	$aVistaPagamento = $_POST['avista'];
	$prazoPagamento = $_POST['prazo'];
	
	$_SESSION['formasDePagamento'][] = new FormaDePagamento($descricaoPagamento, $aVistaPagamento, $prazoPagamento);

}

var_dump($_SESSION['formasDePagamento']);


?>