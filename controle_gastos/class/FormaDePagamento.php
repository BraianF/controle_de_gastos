<?php
	
	class FormaDePagamento {
		private $descricao;
		private $aVista;
		private $prazo;
		
		public function __construct($descricao, $aVista, $prazo = 0) {
			$this->descricao = $descricao;
			$this->aVista = $aVista;
			$this->prazo = $prazo;
		}
		
		public function getDescricao() {
			return $this->descricao;
		}
		
		public function setDescricao($descricao): void {
			$this->descricao = $descricao;
		}
		
		public function getAVista() {
			return $this->aVista;
		}
		
		public function setAVista($aVista): void {
			$this->aVista = $aVista;
		}
		
		public function getPrazo() {
			return $this->prazo;
		}
		
		public function setPrazo($prazo): void {
			$this->prazo = $prazo;
		}
	}