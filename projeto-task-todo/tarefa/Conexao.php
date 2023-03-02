<?php
if (isset($_POST['acao'])) {

    if ($_POST['acao'] == "inserir") {
        inserirTask();
    }

    if ($_POST['acao'] == "alterar") {
        alterarTask();
    }

    if ($_POST['acao'] == "excluir") {
        excluirTask();
    }
}

function abrirBanco()
{
    $conexao = new mysqli("localhost", "root", "", "task_todo");
    return $conexao;
}

function inserirTask()
{
    $banco = abrirBanco();
    $sql = "INSERT INTO tarefa(descricao_tarefa, status_tarefa)" .
     "VALUES ('{$_POST["descricao_tarefa"]}',1)";
    $banco->query($sql);
    $banco->close();
    voltarInserir();
}

function listarTask()
{
    $banco = abrirBanco();
    $sql = "select * from tarefa ";
    $resultado = $banco->query($sql);
    while ($row = mysqli_fetch_array($resultado)) {
        $grupo[] = $row;
    }
    return $grupo;
}

function excluirTask()
{
    $banco = abrirBanco();
    $sql = "delete from tarefa where id='{$_POST["id"]}'";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function selecionarTaskID($id)
{
    $banco = abrirBanco();
    $sql = "select * from tarefa where id=" . $id;
    $resultado = $banco->query($sql);
    $cliente = mysqli_fetch_assoc($resultado);
    return $cliente;
}

function alterarTask()
{
    $banco = abrirBanco();
    $sql = "UPDATE tarefa SET descricao_tarefa='{$_POST["descricao_tarefa"]}',data_alteracao='{$_POST["data_alteracao"]}',data_criacao='{$_POST["data_criacao"]}',status_tarefa=1 WHERE id='{$_POST["id"]}'";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function voltarInserir()
{
    header("location:Index.php");
}

function voltarIndex()
{
    header("location:Index.php");
}