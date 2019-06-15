<?php
	require_once "../class/Gasto.php";
	session_start();
	if (isset($_SESSION["gastos"])){
		/* @var $gasto Gasto*/
		foreach ($_SESSION["gastos"] as $gasto) {
			echo '<p class="mb-auto">Tipo de gasto: '.$gasto->getTipo().'</p>';
			echo '<p class="mb-auto">Data: '.$gasto->getData().'</p>';
			echo '<p class="mb-auto">Custo: R$'.$gasto->getValor().'</p>';
			echo '<p class="mb-auto">Forma de pagamento: '.$gasto->getFormaPagamento().'</p>';
			echo '<hr>';
		}
	} else{
		?>
		
		<p class="mb-auto">Não há gastos cadastrados.</p>
		
		<?php
	}
?>