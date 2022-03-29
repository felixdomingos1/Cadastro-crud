<?php
    include 'banco.php';
    include 'classes/Pessoa.php';
    include 'helper.php';

    $exibir_table = true;
    $exibir_form = false;
    $exibir_delete = false;

    $pessoas = new Pessoa($mysqli);

    $pessoas->buscar_contatos();
    
    include 'template.php';
?>