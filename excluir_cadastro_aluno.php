<?php
    //Incluir o arquivo de conexão com o banco de dados
    include 'database.php';

    //Resgatar o id via GET para realizar a consulta por id
    $id_aluno = $_GET['id_aluno'];

    //Construir uma string em SQL para realizar a exclusão por ID
    $sql_excluir_por_id = "DELETE FROM sge_alunos WHERE sge_alunos.id_aluno = '$id_aluno'";

    if(mysqli_query($conexao,$sql_excluir_por_id)){
        header("location: listar_aluno.php");
    }
    else{
        echo "falha ao excluir o cadastro. ";
    }
