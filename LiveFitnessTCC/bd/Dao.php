<?php 
include 'connection.php';
include 'cliente.php';

Class Dao
{
	private $conexao;

	public function __construct()
	{
		try 
		{
		 	$this->conexao = new Connection("localhost", "root", "", "bancolive");
		 	$this->conexao->_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} 
		catch (PDOException $e) 
		{
			echo "Problemas na conexao.<br/>" .$e->getMessage();
		}
	}

	public function get_all()
	{
		$sql = "select * from cliente";
		$stmt = $this->conexao->_conn->prepare($sql);
		$stmt->execute();
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		return $stmt->fetchAll();
	}

	public function get_by_id($id)
	{
		$sql = "select * from cliente where cli_matric = $id";
		$stmt = $this->conexao->_conn->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchObject(__CLASS__);
		return $result;
	}
}
?>