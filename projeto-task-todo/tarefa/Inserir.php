<head>
    <meta charset="UTF-8">
    <title>Adicionar Task</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<form style="margin: 30px;" name="dadosTarefa" action="Conexao.php" method="post">
    <h1>Adicionar Tasks</h1>
    <hr>
    <a class="btn btn-primary" href="Index.php">Listar Tasks</a>
    <br>
    <br>
    <h4>Preencha as informações abaixo</h4>
    <br>
    <h6>Informações pessoais</h6>
    <hr>
    <div class="row mb-3">
        <div class="col-sm-2">
            <label>Descrição Tarefa</label>
            <input type="text" class="form-control" name="descricao_tarefa">
        </div>
    </div>
    <!-- <div class="row mb-3">
        <div class="col-sm-2">
            <label>Data Alteração</label>
            <input type="text" class="form-control" name="data_alteracao">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-2">
            <label>Data Criação</label>
            <input type="text" class="form-control" name="data_criacao">
        </div>
    </div> -->
    <!-- <div class="row mb-3">
        <div class="col-sm-2">
            <label>Status</label>
            <input type="checkbox" class="form-control" name="status_tarefa">
        </div>
    </div> -->
>
    <br>
    <br>
    <input type="hidden" name="acao" value="inserir">
    <input type="submit" name="enviar" value="Enviar" class="btn btn-primary">
</form>