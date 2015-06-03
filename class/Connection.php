<?php

class Connection{
	
	private $dsn = 'mysql:host=localhost;dbname=testeprog';
	private $username = 'root';
	private $password = '';
	
	public function conecta(){

		$db = new PDO($this->dsn, $this->username, $this->password);
		return $db;
	}
	
	public function executeQuery($query,$params=array()){
		$db = $this->conecta();
		$statement = $db->prepare($query);
		foreach ($params as $key=>$value){
			$statement->bindValue($key, $value);
		}
				
		if($statement->execute()){
			return true;
		}else{
			return $statement->errorInfo();
		}
	}
}