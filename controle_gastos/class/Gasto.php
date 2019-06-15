<?php
	
	class Gasto {
		private $tipo;
		private $data;
		private $valor;
		private $formaPagamento;
		
		/**
		 * Gasto constructor.
		 * Auxilia na criação do codigo
		 * @param TipoGasto $tipo
		 * @param $data
		 * @param $valor
		 * @param FormaDePagamento $formaPagamento
		 */
		public function __construct($tipo, $data, $valor, $formaPagamento) {
			$this->tipo = $tipo;
			$this->data = $data;
			$this->valor = $valor;
			$this->formaPagamento = $formaPagamento;
		}
		
		public function getTipo() {
			return $this->tipo;
		}
		
		public function setTipo($tipo) {
			$this->tipo = $tipo;
		}
		
		public function getData() {
			return $this->data;
		}
		
		public function setData($data) {
			$this->data = $data;
		}
		
		public function getValor() {
			return $this->valor;
		}
		
		public function setValor($valor) {
			$this->valor = $valor;
		}
		
		public function getFormaPagamento() {
			return $this->formaPagamento;
		}
		
		public function setFormaPagamento($formaPagamento) {
			$this->formaPagamento = $formaPagamento;
		}
		
		function gerarRelatorio(){
			echo "Tipo de gasto: " . $this->tipo->getDescricaoTipo() . "<br>";
			echo "Data: " . $this->data . "<br>";
			echo "Custo: R$" . $this->valor . "<br>";
			echo "Forma de pagamento: " . $this->formaPagamento->getDescricao() . "<br>";
			if (!$this->formaPagamento->getAVista()){
				echo "Pagamento para " . $this->formaPagamento->getPrazo() . " dias.<br>";
			}
		}
	}