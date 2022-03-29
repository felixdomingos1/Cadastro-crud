<!--////////////////////FORM//////////////////////////////////////-->

<div class="container">
    <div clas="span10 offset1">
        <div class="card">
            <header class="card-header">
                <h3 class="well"> Adicionar Contato </h3>
            </header>

            <div class="card-body">
                <form class="form-horizontal" action="write.php" method="post" enctype="multipart/form-data">
                    <article class="control-group">
                        <label class="control-label">Nome</label>
                        <input size="50" class="form-control" name="nome" type="text" placeholder="Nome" value="<?php echo($pessoa['nome']); ?>">
                        <?php if ($tem_erro & isset($msm_erro['nome'])): ?>
                            <span class="text-danger"><?php echo $msm_erro['nome']; ?></span>
                        <?php endif ?>
                    </article>

                    <article class="control-group">
                        <label class="control-label">Endereço</label>
                        <input size="80" class="form-control" name="endereco" type="text" placeholder="Endereço" value="<?php echo($pessoa['endereco']); ?>">
                        <?php if ($tem_erro & isset($msm_erro['endereco'])): ?>
                            <span class="text-danger"><?php echo $msm_erro['endereco']; ?></span>
                        <?php endif ?>
                    </article>

                    <article class="control-group">
                        <label class="control-label">Telefone</label>
                        <input size="35" class="form-control" name="telefone" type="text" placeholder="Telefone" value="<?php echo($pessoa['telefone']); ?>">
                        <?php if ($tem_erro & isset($msm_erro['telefone'])): ?>
                            <span class="text-danger"><?php echo $msm_erro['telefone']; ?></span>
                        <?php endif ?>
                    </article>

                    <article class="control-group">
                        <label class="control-label">Email</label>
                        <input size="40" class="form-control" name="email" type="text" placeholder="Email" value="<?php echo($pessoa['email']); ?>">
                        <?php if ($tem_erro & isset($msm_erro['email'])): ?>
                            <span class="text-danger"><?php echo $msm_erro['email']; ?></span>
                        <?php endif ?>
                    </article>

                    <article class="control-group">
                        <label class="control-label">Sexo</label>

                        <div class="form-check">
                            <p class="form-check-label">
                                <input class="form-check-input" type="radio" name="sexo" id="sexoM" value="M" <?php echo(($pessoa['sexo']=='M')?'checked':""); ?>/>
                                Masculino
                            </p>
                        </div>
                        <div class="form-check">
                            <p class="form-check-label">
                                <input class="form-check-input" id="sexoF" name="sexo" type="radio" value="F" <?php echo(($pessoa['sexo']=='F')?'checked':""); ?>/>
                                Feminino
                            </p>
                        </div>
                        <?php if ($tem_erro && isset($msm_erro['sexo'])): ?>
                            <span class="help-inline text-danger"><?php echo $msm_erro['sexo']; ?></span>
                        <?php endif ?>
                    </article>

                    <article class="control-group">
                        <label class="control-label">Foto</label>
                        <input class="form-control-file" type="file" name="foto" value="<?php echo($pessoa['foto']);?>">
                        <?php if ($tem_erro & isset($msm_erro['foto'])): ?>
                            <span class="text-danger"><?php echo $msm_erro['foto']; ?></span>
                        <?php endif ?>
                    </article>

                    <div class="form-actions">
                        <br/>
                        <?php if (isset($_GET['id'])): ?>
                            <input type="hidden" name="id" value="<?php echo($_GET['id']) ?>">
                            <button type="submit" class="btn btn-warning">Atualizar</button>
                        <?php else: ?>
                            <button type="submit" class="btn btn-success">Adicionar</button>
                        <?php endif ?>
                        <a href="index.php" type="btn" class="btn btn-default">Voltar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
 <!--///////////////////////////ENDFORM//////////////////////////////-->