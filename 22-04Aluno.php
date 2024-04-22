<?php
class Aluno {
	private $ra;
	private $nome;
	private $dataNascimento;
	private $renda;
	
	function __construct($ra,$nome,$dataNascimento,$renda) {
		$this->ra = $ra;
		$this->nome = $nome.
		$this->dataNascimento = $dataNascimento;
		$this->renda = $renda;
	}
	
	public function getRa() {
		return $this->ra;
	}
	public function setRe($ra) {
		$this->ra = $ra;
	}
	public function getNome() {
		return $this->nome;
	}
	public function setNome($nome) {
		$this->nome = $nome;
	}
	public function getDataNascimento() {
		return $this->dataNascimento;
	}
	public function setDataNascimento($dataNascimento) {
		$this->dataNascimento = $dateataNascimento;
	}
	public function getRenda() {
		return $this->renda;
	}
	public function setRenda($renda) {
		$this->renda = $renda;
	}


}

?>
