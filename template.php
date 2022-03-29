<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Cadastro crud</title>
</head>
<body>
    <!--========================================================================-->
    <?php if ($exibir_table): ?>
        <?php include('tabela.php'); ?>
    <?php endif ?>
    <!--========================================================================-->
    <?php if ($exibir_form): ?>
        <?php include('create.php'); ?>
    <?php endif ?>
    <!--=======================================================================-->
    <?php if ($exibir_delete): ?>
        <?php include('apagar.php'); ?>
    <?php endif ?>
    <!--========================================================================-->
</body>
</html>