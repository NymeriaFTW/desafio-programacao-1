<pre>
<?php
	$path = $_FILES['arquivo']['name'];
	$ext = pathinfo($path, PATHINFO_EXTENSION);
	if($ext != 'tab'){
		echo "Por favor, verifique a extensão do arquivo.\n";
	}else{
		require_once 'class/Upload.php';
		$upload = new Upload();
		if($upload->validaFormulario($_FILES)){
			$file = fopen($_FILES['arquivo']['tmp_name'], 'a+');
		
			$indice=0;
			$pLinha = true;
			while (($data = fgetcsv($file, 1000, "\t")) !== FALSE) {
				if ($pLinha){
					$pLinha = false;
					continue;
				}
				if(count($data) == 1){
					echo 'Problema na leitura dos dados, por favor verifique os dados do arquivo!';
					$dados = null;
					break;
				}
				$dados[] = array(
						':purchaser_name' 	=> $data[0],
						':item_description' => $data[1],
						':item_price' 		=> $data[2],
						':purchase_count' 	=> $data[3],
						':merchant_address' => $data[4],
						':merchant_name' 	=> $data[5]
				);
			}
			if($dados != null){
				$upload->salvar($dados);
			}
		}
	}
?>
</pre>
<br>
<a href="/">Voltar</a>