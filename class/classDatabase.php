<?php 

class Database{

	private $host = 'localhost';
	private $usuario = 'root';
	private $password = 'vertrigo';
	private $banco = 'cemu';

	public function conectar(){
		$db = new mysqli($this->host, $this->usuario, $this->password, $this->banco);
		return $db;
	}

	public function desconectar(){
		$mysqli->close();
	}

}

?>