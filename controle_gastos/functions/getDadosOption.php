<?php
	header("Content-Type: application/json; charset=UTF-8");
	require_once "../class/TipoGasto.php";
	require_once "../class/FormaDePagamento.php";
	session_start();
	$arrayFormasDePagemento = array();
	$arrayTiposDeGasto = array();
	if (isset($_SESSION["formasDePagamento"])){
		/* @var $formaDePagamento FormaDePagamento*/
		foreach ($_SESSION["formasDePagamento"] as $formaDePagamento) {
			$arrayFormasDePagemento[] = $formaDePagamento->getDescricao();
		}
	}
	
	
	if (isset($_SESSION["tiposDeGasto"])){
		/* @var $tipoDeGasto TipoGasto*/
		foreach ($_SESSION["tiposDeGasto"] as $tipoDeGasto) {
			$arrayTiposDeGasto[] = $tipoDeGasto->getDescricaoTipo();
		}
	}
	
	$resultado = array($arrayFormasDePagemento, $arrayTiposDeGasto);
	echo json_encode($resultado);