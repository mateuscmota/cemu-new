<?php 

class Relato{
	private $titulo;
	private $nome;
	private $texto;
	private $quantidade_pessoas;
	private $tempo_espera;

	public function Relato($titulo, $nome, $texto, $quantidade_pessoas, $tempo_espera){
		$this->titulo = $titulo;
		$this->nome = $nome;
		$this->texto = $texto;
		$this->quantidade_pessoas = $quantidade_pessoas;
	}

	public function adicionar($fk_id_upa){
		/* CÓDIGO DE INSERT NO BANCO DE DADOS AQUI */
	}
}

?>