<?php
//===================================================
    define("BD_SERVIDOR", "127.0.0.1");
    define("BD_USUARIO", "root");
    define("BD_SENHA", "");
    define("BD_BANCO", "pessoas");

    $mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA,BD_BANCO);
    
    if ($mysqli->connect_errno) {
        echo "Verifique os dados, existe um erro!";
        die();
    }
?>
