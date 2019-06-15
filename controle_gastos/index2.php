<?php
	//Chamando as classes para dentro do INDEX
	require_once "class/FormaDePagamento.php"; // Classe Gasto
	require_once "class/Gasto.php"; // Classe Gasto
	require_once "class/TipoGasto.php"; // Classe Tipogasto
	
	// Declara os arrays que serão utilizados
	$formasDePagamento = Array();
	$listaDeGastos = Array();
	$tiposGasto = Array();
	$arrayContadorGastos = Array();
	
	//Insere no array os objetos de Forma de Pagamento
	$formasDePagamento[] = new FormaDePagamento('Dinheiro', True);
	$formasDePagamento[] = new FormaDePagamento('Cheque', True);
	$formasDePagamento[] = new FormaDePagamento('Cheque Pre', False, 30);
	$formasDePagamento[] = new FormaDePagamento('Cartão Credito', False, 90);
	$formasDePagamento[] = new FormaDePagamento('Cartão Debito', True);
	
	// Insere os tipos de gasto
	$tiposGasto[] = new TipoGasto("Pizza");
	$tiposGasto[] = new TipoGasto("Lasanha");
	$tiposGasto[] = new TipoGasto("Batata");
	$tiposGasto[] = new TipoGasto("Bacon");
	
	
	/*$listaDeGastos[] = new Gasto($tiposGasto[mt_rand(0,3)], '24/05/2019', 1.00, $formasDePagamento[mt_rand(0,3)]);
	$listaDeGastos[] = new Gasto($tiposGasto[mt_rand(0,3)], '25/05/2019', 2.00, $formasDePagamento[mt_rand(0,3)]);
	$listaDeGastos[] = new Gasto($tiposGasto[mt_rand(0,3)], '26/05/2019', 3.00, $formasDePagamento[mt_rand(0,3)]);
	$listaDeGastos[] = new Gasto($tiposGasto[mt_rand(0,3)], '27/05/2019', 4.00, $formasDePagamento[mt_rand(0,3)]);
	$listaDeGastos[] = new Gasto($tiposGasto[mt_rand(0,3)], '28/05/2019', 5.00, $formasDePagamento[mt_rand(0,3)]);
	$listaDeGastos[] = new Gasto($tiposGasto[mt_rand(0,3)], '29/05/2019', 6.0, $formasDePagamento[mt_rand(0,3)]);
	$listaDeGastos[] = new Gasto($tiposGasto[mt_rand(0,3)], '30/05/2019', 7.0, $formasDePagamento[mt_rand(0,3)]);
	$listaDeGastos[] = new Gasto($tiposGasto[mt_rand(0,3)], '31/05/2019', 8.00, $formasDePagamento[mt_rand(0,3)]);
	$listaDeGastos[] = new Gasto($tiposGasto[mt_rand(0,3)], '01/06/2019', 9.00, $formasDePagamento[mt_rand(0,3)]);
	$listaDeGastos[] = new Gasto($tiposGasto[mt_rand(0,3)], '02/06/2019', 10.00, $formasDePagamento[mt_rand(0,3)]);
	$listaDeGastos[] = new Gasto($tiposGasto[mt_rand(0,3)], '03/06/2019', 11.00, $formasDePagamento[mt_rand(0,3)]);
	$listaDeGastos[] = new Gasto($tiposGasto[mt_rand(0,3)], '04/06/2019', 12.00, $formasDePagamento[mt_rand(0,3)]);*/
	
	//Insere os gastos na lista de gastos
	$listaDeGastos[] = new Gasto($tiposGasto[0], '24/05/2019', 1.00, $formasDePagamento[mt_rand(0,4)]);
	$listaDeGastos[] = new Gasto($tiposGasto[1], '25/05/2019', 2.00, $formasDePagamento[mt_rand(0,4)]);
	$listaDeGastos[] = new Gasto($tiposGasto[2], '26/05/2019', 3.00, $formasDePagamento[mt_rand(0,4)]);
	$listaDeGastos[] = new Gasto($tiposGasto[3], '27/05/2019', 4.00, $formasDePagamento[mt_rand(0,4)]);
	$listaDeGastos[] = new Gasto($tiposGasto[0], '28/05/2019', 5.00, $formasDePagamento[mt_rand(0,4)]);
	$listaDeGastos[] = new Gasto($tiposGasto[0], '29/05/2019', 6.0, $formasDePagamento[mt_rand(0,4)]);
	$listaDeGastos[] = new Gasto($tiposGasto[2], '30/05/2019', 7.0, $formasDePagamento[mt_rand(0,4)]);
	$listaDeGastos[] = new Gasto($tiposGasto[3], '31/05/2019', 8.00, $formasDePagamento[mt_rand(0,4)]);
	$listaDeGastos[] = new Gasto($tiposGasto[0], '01/06/2019', 9.00, $formasDePagamento[mt_rand(0,4)]);
	$listaDeGastos[] = new Gasto($tiposGasto[3], '02/06/2019', 10.00, $formasDePagamento[mt_rand(0,4)]);
	$listaDeGastos[] = new Gasto($tiposGasto[2], '03/06/2019', 11.00, $formasDePagamento[mt_rand(0,4)]);
	$listaDeGastos[] = new Gasto($tiposGasto[1], '04/06/2019', 12.00, $formasDePagamento[mt_rand(0,4)]);
	
	//Cria uma lista temporária para otimizar as buscas
	$listaDeGastosTemp = $listaDeGastos;
	
	// Faz a separação pelo tipo de gasto
	foreach ($tiposGasto as $tipoGasto){
		// Inicializa os valores de contador e total do gasto. Zera toda vez que o loop reiniciar
		$contaTipoGasto = 0;
		$valorTotalTipoGasto = 0;
		
		/* @var $tipoGasto TipoGasto */
		echo "------------------------------------------------------------------------<br><br>";
		echo "Gastos com ". $tipoGasto->getDescricaoTipo() . "<br>";
		
		// Percorre o array temporario de gastos, compara o tipo de cada gasto, adiciona os dados, gera relatorio e remove o item do array
		foreach ($listaDeGastosTemp as $gasto){
			if ($tipoGasto == $gasto->getTipo() ){
				$contaTipoGasto++;
				$valorTotalTipoGasto += $gasto->getValor();
				
				$gasto->gerarRelatorio();
				echo "<br>";
				
				if (($index = array_search($gasto, $listaDeGastosTemp)) !== false) {
					unset($listaDeGastosTemp[$index]);
				}
			}
		}

		echo "Total gasto com " . $tipoGasto->getDescricaoTipo() . ": R$" . $valorTotalTipoGasto . "<br>";
		echo "------------------------------------------------------------------------<br><br>";
		
		$arrayContadorGastos[] = Array($tipoGasto, $contaTipoGasto, $valorTotalTipoGasto);
	}
	
	echo "<br><br><hr><br><br>";
	echo "Resumo dos gastos:<br>";
	foreach ($arrayContadorGastos as $resumoGasto){
		/* @var $resumoGasto TipoGasto[]|Object[] */
		echo "------------------------------------------------------------------------<br><br>";
		echo "Tipo: " . $resumoGasto[0]->getDescricaoTipo() . "<br>";
		echo "Quantas vezes consumiu: " . $resumoGasto[1] . "<br>";
		echo "Quanto gastou (total): " . $resumoGasto[2] . "<br>";
		echo "------------------------------------------------------------------------<br><br>";
	}
	
	echo "Desenvolvido por Braian Gabriel Antniolli";