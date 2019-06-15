<?php
	require_once('class/Gasto.php');
	session_start();
	
	
	
	if (isset($_POST['tipoGasto']) && isset($_POST['dataGasto']) && isset($_POST['custoGasto']) && isset($_POST['pagamentoGasto'])) {
		$tipoGasto = $_POST['tipoGasto'];
		$dataGastp = $_POST['dataGasto'];
		$custoGasto = $_POST['custoGasto'];
		$pagamentoGasto = $_POST['pagamentoGasto'];
		
		$_SESSION['gastos'][] = new Gasto($tipoGasto, $dataGastp, $custoGasto,$pagamentoGasto);
		
	}
	
	var_dump($_SESSION['gastos']);