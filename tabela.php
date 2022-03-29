<!--///////////////////////////TABLE////////////////////////////////////-->
<div class="container">
    <header class="jumbotron">
        <div class="row">
            <h2>Cadastro em PHP <span class="badge badge-secondary">Eduardo JP</span></h2>
        </div>
    </header>
    <aside class="row">  
        <p>
            <a href="write.php" class="btn btn-success">Adicionar</a>
        </p>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pessoas->pessoas as $pessoa): ?>
                    <tr>
                        <th scope="row">
                            <input type="checkbox" class="custom-checkbox" name="check" value="<?php echo $pessoa['id']; ?>">
                        </th>
                        <td><?php echo $pessoa['nome']; ?></td>
                        <td><?php echo $pessoa['endereco']; ?></td>
                        <td><?php echo $pessoa['telefone']; ?></td>
                        <td><?php echo $pessoa['email']; ?></td>
                        <td><?php echo mostrar_sexo($pessoa['sexo']); ?></td>
                        <td width=250>
                            <a class="btn btn-primary" href="read.php?id=<?php echo($pessoa['id']);?>">Info</a>
                            <a class="btn btn-warning" href="write.php?id=<?php echo($pessoa['id']);?>">Atualizar</a>
                            <a class="btn btn-danger" href="delete.php?id=<?php echo($pessoa['id']);?>">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </aside>
</div>
<!--///////////////////////////ENDTABLE////////////////////////////////////-->