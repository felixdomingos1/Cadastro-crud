<?php 
/**
 * 
 */
class Pessoa{
	public $mysqli;
	public $pessoas = array();
	public $pessoa;
	function __construct($nova_mysqli){
		$this->mysqli = $nova_mysqli;
	}

	public function buscar_contatos(){
		$buscar = 'SELECT * FROM pessoa';
		$resultado = $this->mysqli->query($buscar);

		$this->pessoas = array();

		while ($pessoa = mysqli_fetch_assoc($resultado)) {
			$this->pessoas[] = $pessoa;
		}
	}

	public function buscar_contato($id){
		$buscar = 'SELECT * FROM pessoa WHERE id ='.$id;
		$resultado = $this->mysqli->query($buscar);

		$this->pessoa = mysqli_fetch_assoc($resultado);
	}

	public function gravar_contatos($pessoa){
		$gravar = "
			INSERT INTO pessoa
			(nome,endereco, telefone, email, sexo, foto)
			VALUES
			(
				'{$pessoa['nome']}',
				'{$pessoa['endereco']}',
				'{$pessoa['telefone']}',
				'{$pessoa['email']}',
				'{$pessoa['sexo']}',
				'{$pessoa['foto']}'
			)
		";

		$this->mysqli->query($gravar);
	}

	public function atualizar_contato($pessoa){
		$atualizar = " UPDATE pessoa SET
					nome = '{$pessoa['nome']}', endereco = '{$pessoa['endereco']}', telefone = '{$pessoa['telefone']}', email = '{$pessoa['email']}', sexo = '{$pessoa['sexo']}', foto = '{$pessoa['foto']}'
					WHERE id = {$pessoa['id']}
					";
		$this->mysqli->query($atualizar);
	}

	public function deletar_contato($id){
		$deletar = 'DELETE FROM pessoa where id ='.$id;

		$this->mysqli->query($deletar);
	}
}
?>