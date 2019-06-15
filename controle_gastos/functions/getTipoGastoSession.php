<?php
	require_once "../class/TipoGasto.php";
	session_start();
	if (isset($_SESSION["tiposDeGasto"])){
		/* @var $tipoDeGasto TipoGasto*/
		foreach ($_SESSION["tiposDeGasto"] as $tipoDeGasto) {
			echo '<p class="mb-auto">Tipo: '.$tipoDeGasto->getDescricaoTipo().'</p>';
			echo '<hr>';
		}
	} else{
		?>
		
		<p class="mb-auto">Não há tipos de gasto cadastrados.</p>
		
		<?php
	}

?>