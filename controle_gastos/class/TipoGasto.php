<?php
	class TipoGasto {
		private $descricaoTipo;
		
		public function __construct($descricaoTipo) {
			$this->descricaoTipo = $descricaoTipo;
		}
		
		public function getDescricaoTipo() {
			return $this->descricaoTipo;
		}
		
		public function setDescricaoTipo($descricaoTipo) {
			$this->descricaoTipo = $descricaoTipo;
		}
	}