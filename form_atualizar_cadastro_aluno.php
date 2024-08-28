<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização de Cadastro</title>
    <style>
        body {
            background-color: #ffffcc;
            padding-top: 0;
            margin: 0;
        }
        .content {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
    </style>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php
    // Incluir o cabeçalho do site
    include 'header.php';

    // Incluir o arquivo de conexão com o banco de dados
    include 'database.php';

    // Resgatar o ID passado via GET pelo link do listar alunos
    $id_aluno_update = $_GET['id_aluno'];

    // Comando SQL para consultar por ID
    $sql_id = "SELECT * FROM sge_alunos WHERE id_aluno = '$id_aluno_update'";

    // Executar a consulta SQL
    $consulta_id = mysqli_query($conexao, $sql_id);

    // Converter o resultado da consulta em um array associativo
    $dados_aluno_id = mysqli_fetch_array($consulta_id);
    ?>

    <div class="content">
        <h2>Atualização de cadastro</h2>
        <p>Todos os campos devem estar preenchidos.</p>
        <form action="atualizar_cadastro_aluno.php" method="post">
            <input type="hidden" name="id_aluno" value="<?php echo $dados_aluno_id['id_aluno']?>">
            <div class="mb-3 mt-3">
                <label for="nome_aluno">Nome do aluno:</label>
                <input type="text" name="nome_aluno" id="nome_aluno" value="<?php echo $dados_aluno_id['nome_aluno']?>" class="form-control">
            </div> 
            <div class="mb-3">
                <label for="email_aluno">E-mail:</label>
                <input type="text" name="email_aluno" id="email_aluno" value="<?php echo $dados_aluno_id['email_aluno']?>" class="form-control">
            </div>
            <div class="mb-3">
                <label for="telefone_aluno">Telefone:</label>
                <input type="text" name="telefone_aluno" id="telefone_aluno" value="<?php echo $dados_aluno_id['telefone_aluno']?>" class="form-control">
            </div>
            <div class="d-grid gap-3">
                <input type="submit" value="Atualizar cadastro" class="btn btn-dark text-white btn-block">
            </div>
        </form>
        <div class="mb-3 mt-3">
            <a href="index.php" class="btn btn-warning">Voltar</a>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>