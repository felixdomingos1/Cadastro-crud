<?php
    include 'banco.php';
    include 'classes/Pessoa.php';

    $id = 0;
    $exibir_table = false;
    $exibir_form = false;
    $exibir_delete = true;

    $pessoas = new Pessoa($mysqli);

    if(!empty($_GET['id'])){
        $id = $_REQUEST['id'];
    }
    if(!empty($_POST)){
        $id = $_POST['id'];

        //Delete do banco:
        $pessoas->deletar_contato($id);
        header("Location: index.php");
    }

    include 'template.php';
?>
