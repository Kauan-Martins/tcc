<?php
	class Cliente{

		private $nome;
		private $email;
		private $senha;
		private $endereco;
		private $telefone;
		
		function __construct($nome, $email, $senha, $endereco, $telefone){
			$this->nome = $nome;
			$this->email = $email;
			$this->senha = $senha;
			$this->endereco = $endereco;
			$this->telefone = $telefone;
		}

		function get_nome(){
			return $this->nome;
		}

		function get_email(){
			return $this->email;
		}

		function get_senha(){
			return $this->senha;
		}

		function get_endereco(){
			return $this->endereco;
		}

		function get_telefone(){
			return $this->telefone;
		}
	}
?>