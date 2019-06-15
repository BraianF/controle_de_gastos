<?php
	require_once "../class/FormaDePagamento.php";
	session_start();
	if (isset($_SESSION["formasDePagamento"])){
		/* @var $formaDePagamento FormaDePagamento*/
		foreach ($_SESSION["formasDePagamento"] as $formaDePagamento) {
			echo '<p class="mb-auto">Forma: '.$formaDePagamento->getDescricao().'</p>';
			if ($formaDePagamento->getAVista()){
				echo '<p class="mb-auto">Pagamento à vista</p>';
			} else {
				echo '<p class="mb-auto">Pagamento à prazo</p>';
				echo '<p class="mb-auto">Parcelas: '.$formaDePagamento->getPrazo().'</p>';
			}
			echo '<hr>';
		}
	} else{
		?>
		
		<p class="mb-auto">Não há formas de pagamento cadastradas.</p>
		
		<?php
	}

?>