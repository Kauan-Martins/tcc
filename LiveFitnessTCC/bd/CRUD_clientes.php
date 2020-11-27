<?php 
	include 'connection.php'; //inportando o arquivo connection
	include 'cliente.php';

	try 
	{
		$conexao = new Connection("localhost", "root", "", "bancolive");
		$conexao->_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$acao = $_POST["acao"];

		if ($acao == "criar_cli") {

			$cliente = set_cliente();

			$nome = $cliente->get_nome();
			$email = $cliente->get_email();
			$senha = $cliente->get_senha();
			$endereco = $cliente->get_endereco();
			$telefone = $cliente->get_telefone();

			$sql = "insert into cliente(
						cli_nome, 
						cli_email, 
						cli_senha, 
						cli_endereco,
						cli_tel)
					values('$nome', '$email', '$senha', '$endereco', $telefone)";
			$conexao->_conn->exec($sql);

			end_process_cli();
		}

		/*if ($acao == "atualizar_cli") {

			$cliente = set_cliente();

			$nome = $cliente->get_nome();
			$email = $cliente->get_email();
			$senha = $cliente->get_senha();
			$endereco = $cliente->get_endereco();
			$telefone = $cliente->get_telefone();

			$sql = "update cliente
					set saldo = $saldo, titular = '$titular'
					where numero = $numero";
					echo "$numero";
			$conexao->_conn->exec($sql);

			end_process_cli();
		}	

		if ($acao == "exclusao_cli") {
			$numero = $_POST["numero"];
			$sql = "delete from cliente
					where numero = $numero";
			$conexao->_conn->exec($sql);
			end_process_cli();
		}*/

	} catch (PDOException $e) {
		echo "Problemas na Inserção.<br>$sql<br>" .$e->getMessage();
	}

	function set_cliente(){
		$cliente = new Cliente(
			$_POST["txtName"], 
			$_POST["txtEmail"], 
			$_POST["txtSenha"],
			$_POST["txtEnd"],
			$_POST["txtTel"]
		);
		return $cliente;
	}

	function end_process_cli(){
		global $conexao;
		//$conexao->close_connection(); Fala que é um método indefinido
		header("Location: ../planos-cliente.php");
		die();
	}

?>