<?php 

class Connection
{
	private $_servername;
	private $_username;
	private $_password;
	private $_dbname;

	public $_conn;

	function __construct($server, $user, $passwd, $db)
	{
		$this->_servername = $server;
		$this->_username = $user;
		$this->_password = $passwd;
		$this->_dbname = $db;


		try {
			$this->_conn = new PDO("mysql:host=$this->_servername;dbname=$this->_dbname", $this->_username, $this->_password);
			$this->_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//echo "<h2>Conexão Realizada com sucesso!</h2>";
		} catch 
		(PDOException $e){
			//echo "<h1>Falha na Conexão!</h1><br/>";
			//echo "<h2>Erro encontrado:</h2>" .$e->getMessage();
		}
	}

	public function Connected(){
		return $this->_conn ? $this->_conn : null;
	}
}
?>