<?php
	/*
	include 'connection.php';
	include 'planos.php';

	try 
	{
		$conexao = new Connection("localhost", "root", "", "bancolive");
		$conexao->_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$acao = $_POST["acao"];

		if ($acao == "criar_planos") {

			$planos = set_planos();

			$tipo = $planos->get_tipo();

			$sql = "insert into alocacao(
						cli_nome, 
						cli_email, 
						cli_senha, 
						cli_endereco,
						cli_tel)
					values('$nome', '$email', '$senha', '$endereco', $telefone)";
					//Como é que vou inserir o tipo de planos que o usuário usar
			$conexao->_conn->exec($sql);

			end_process_planos();
		}

		if ($acao == "atualizar_planos") {

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

		if ($acao == "exclusao_planos") {
			$numero = $_POST["numero"];
			$sql = "delete from cliente
					where numero = $numero"; //falta arrumar estes scripts
			$conexao->_conn->exec($sql);
			end_process_cli();
		}

	} catch (PDOException $e) {
		echo "Problemas na Inserção.<br>$sql<br>" .$e->getMessage();
	}

	function set_cliente(){
		$planos = new Planos(
			$_POST["txtName"]
		);

		//$cliente->depositar($_POST["txtSaldo"]);
		return $planos;
	}

	function end_process_cli(){
		global $conexao;
		//$conexao->close_connection(); Fala que é um método indefinido
		header("Location: ../pagamento-cliente.php");
		die();
	}

	*/
?>