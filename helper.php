<?php 
	function mostrar_sexo($sexo){
		if ($sexo == 'F') {
			return "Feminino";
		} else {
			return "Masculino";
		}
	}

	function tratar_file($foto){
		$padrao = "/^.+(\.jpg|\.png)$/";
		$resultado = preg_match($padrao, $foto['name']);

		if (!$resultado) {
			return false;
		}

		move_uploaded_file($foto['tmp_name'],"img/{$foto['name']}");

		return true;
	}
?>