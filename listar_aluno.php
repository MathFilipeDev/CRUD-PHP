<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php
    include "database.php";
    include "header.php"; 
    $sql_listar = "SELECT * FROM sge_alunos";
    $consulta_bd = mysqli_query($conexao, $sql_listar);
    ?>

    <div class="container">
        <h2>Lista de alunos</h2>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Atualizar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php while($dados_db = mysqli_fetch_array($consulta_bd)):?>
                <tr>
                    <td><?php echo $dados_db['nome_aluno'];?></td>
                    <td><?php echo $dados_db['email_aluno'];?></td>
                    <td><?php echo $dados_db['telefone_aluno'];?></td>
                    <td><a href="form_atualizar_cadastro_aluno.php?id_aluno=<?php echo $dados_db['id_aluno'];?>"><img src="img/iconsupdate.png" alt="Atualizar" width="50"></a></td>
                    <td><a href="excluir_cadastro_aluno.php?id_aluno=<?php echo $dados_db['id_aluno'];?>"><img src="img/iconsdelete.png" alt="Excluir" width="50"></a></td>
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>

        <div class="d-grid">
    <a href="form_cad_aluno.php" class="btn btn-dark text-white form-control">Cadastrar</a>
        </div>
        <br>
        <div class="d-grid">
            <a href="index.php" class="btn btn-warning text-dark form-control">Início</a>
        </div>

        <?php include "footer.php"; ?>
    </div>
</body>
</html>