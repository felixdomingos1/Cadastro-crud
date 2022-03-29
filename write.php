<?php 
include 'banco.php';
include 'classes/Pessoa.php';
include 'helper.php';

    $tem_erro = false;
    $msm_erro = array();
    $exibir_table = false;
    $exibir_form = true;
    $exibir_delete = false;

    $pessoas = new Pessoa($mysqli);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pessoa = array();

        if (isset($_POST['nome']) && $_POST['nome'] !== "") {
            $pessoa['nome'] = $_POST['nome'];    
        }else{
            $tem_erro = true;
            $msm_erro['nome'] = "Por favor digite o seu nome";
        }

        if (isset($_POST['endereco']) && $_POST['endereco'] !== "") {
            $pessoa['endereco'] = $_POST['endereco'];    
        }else{
            $tem_erro = true;
            $msm_erro['endereco'] = "Por favor digite o seu endereço";
        }

        if (isset($_POST['telefone']) && $_POST['telefone'] !== "") {
            $pessoa['telefone'] = $_POST['telefone'];    
        }else{
            $tem_erro = true;
            $msm_erro['telefone'] = "Por favor digite o número do telefone";
        }

        if (isset($_POST['email']) && $_POST['email'] !== ""){
            $pessoa['email'] = $_POST['email'];
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $tem_erro = true;
                $msm_erro['email'] = "Por favor digite um endereço de email v‡lido!";                
            }   
        }else {
            $tem_erro = true;
            $msm_erro['email'] = "Por favor digite um endereço de email!";
        }
        
        if (isset($_POST['sexo']) && !empty($_POST['sexo'])) {
            $pessoa['sexo'] = $_POST['sexo'];
        } else {
            $tem_erro = true;
            $msm_erro['sexo'] ="Por favor seleccione um campo!";
        }

        if (empty($_FILES['foto']['name'])) {
            $tem_erro = true;
            $msm_erro['foto'] = 'Deves selecionar um Imagem!<br>';
        } else{
            if (tratar_file($_FILES['foto'])) {
                $pessoa['foto'] = $_FILES['foto']['name'];
            } else {
                $tem_erro = true;
                $msm_erro['foto'] = 'Selecione uma imagem do tipo .jpg ou .png';
            } 
        }

        if (isset($_POST['id']) && $_POST['id']!=="") {
            if (!$tem_erro) {
                $pessoa['id'] = $_POST['id'];
                $pessoas->atualizar_contato($pessoa);
                header("Location: index.php");
                die();
            } else{
                $_GET['id'] = $_POST['id'];
            }        
        } else {
            if (!$tem_erro) {
                $pessoas->gravar_contatos($pessoa);
                header("Location: index.php");
                die();
            }
        }

    }

    if (isset($_GET['id'])) {
        $pessoas->buscar_contato($_GET['id']);
        $pessoa = $pessoas->pessoa;
    } else {
        $pessoa = array(
            'nome' => '',
            'endereco' => '',
            'telefone' => '',
            'email' => '',
            'sexo' => '',
            'foto' => '' 
        );
    }
    
    
    include 'template.php';
?>
