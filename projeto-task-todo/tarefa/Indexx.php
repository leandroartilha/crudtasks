<?php include 'Conexao.php';
$grupo = listarTask();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Projeto Task ToDo</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="/componentes/img/favicon.png">
    <link rel='stylesheet' type='text/css' media='screen' href='/componentes/main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='/componentes/mainTasksArea.module.css'>
    <script src='main.js'></script>
</head>

<body>

    <header class="backgroundHeader">
        <img src="/componentes/img/logo.svg" alt='Logo Site'>
    </header>

    <form action="/action_page.php" class="form">

        <input type="text" class="input" id="descricao_tarefa" name="descricao_tarefa" onChange="" placeholder="Adicione uma nova tarefa"><br>
        <input type="hidden" name="acao" value="inserir">
        <input type="submit" name="enviar" value="Enviar" class="btn btn-primary">
        <!-- <button type="submit" name="enviar" value="Enviar">
            Criar
            <i class="material-icons">add_circle_outline</i>
        </button> -->

    </form>

    <div class="containerTasksArea">
        <header>
            <div>
                <span class="createdTasks">Coisas para fazer:</span>
            </div>
        </header>

        <div class="container">
            <div class="content">
                <div class="round">
                    <label for="task.id">
                        <input type='checkbox' id="task.id" onChange="" />
                        <span class="checkmark"></span>
                    </label>
                </div>
                <span class="notDone">
                    <p>descrição tarefa</p>
                </span>
                <!-- <span class="done ? doneText : '' ">
                    <p>descrição tarefa</p>
                </span> -->
            </div>

            <button type="submit" class="buttonEdit" onClick="" />
            <i class="material-icons">mode_edit</i>
            </button>

            <button type="submit" class="buttonDelete" onClick="" />
            <i class="material-icons">delete</i>
            </button>
        </div>

        <div class="emptyArea">
            <i class="material-icons">note_add</i>
            <span class="firstText">Você ainda não tem tarefas cadastradas</span>
            <span>Crie tarefas e organize seus itens a fazer</span>
        </div>
    </div>

</body>

</html>