<?php
include("Conexao.php");
$tarefa = selecionarTaskID($_POST["id"]);

?>
<head>
    <meta charset="UTF-8">
    <title>Alterar Pet</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<form style="margin: 30px;" name="dadosTarefa" action="Conexao.php" method="post">
    <h1>Alterar Clientes</h1>
    <hr>
    <a class="btn btn-primary" href="Index.php">Listar Pets</a>
    <br>
    <br>
    <h4>Preencha com as novas Informações</h4>
    <br>
    <h6>Informações pessoais do pet</h6>
    <hr>
    <div class="row mb-3">
        <div class="col-sm-2">
            <label>Descrição Tarefa</label>
            <input type="text" class="form-control" name="descricao_tarefa" value="<?= $tarefa["descricao_tarefa"] ?>">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-2">
            <label>Data Alteração</label>
            <input type="input" class="form-control" name="data_alteracao" value="<?= $tarefa["data_alteracao"] ?>">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-2">
            <label>Data Criação</label>
            <input type="input" class="form-control" name="data_criacao" value="<?= $tarefa["data_criacao"] ?>">
        </div>
    </div>
    <!-- <div class="row mb-3">
        <div class="col-sm-2">
            <label>Status</label>
            <input type="checkbox" class="form-control" name="status_tarefa" value="<?= $tarefa["status_tarefa"] ?>">
        </div>
    </div> -->

    <input type="hidden" name="acao" value="alterar">
    <input type="hidden" name="id" value="<?= $tarefa["id"] ?>">
    <input type="submit" name="enviar" value="Enviar" class="btn btn-primary">
</form>