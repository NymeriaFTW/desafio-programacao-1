<?php

require_once 'class/Connection.php';

class Upload{
	
	/**
	 * Recebe a variável $_FILES para a verificação do formulário.
	 * @param unknown $post
	 * @param unknown $files
	 */
	public function validaFormulario($files){
		if($files['arquivo'] == '' || $files['arquivo']['error'] != 0){
			return 'Por favor verifique seu arquivo e envie novamente.';
		}
		return true;
	}
	
	public function salvar($dados){
		
		$connection = new Connection();
		$connection->conecta();

		$query = "INSERT INTO `testeprog`.`compras` (`purchaser_name`, `item_description`, `item_price`, `purchase_count`, `merchant_address`, `merchant_name`) VALUES (:purchaser_name, :item_description, :item_price, :purchase_count, :merchant_address, :merchant_name);";
		$ct_ok = 0;
		$ct_nok = 0;
		foreach ($dados as $registro){
			/*Caso falhe o insert, retorna um erro.*/
			$result = $connection->executeQuery($query,$registro);
			if($result){
				$ct_ok++;
			}else{
				$ct_nok++;
			}
		}
		echo $ct_ok . " registros inclusos com sucesso.\n";
		echo $ct_nok . " registros inclusos com sucesso.";
		return true;
	}

	
}