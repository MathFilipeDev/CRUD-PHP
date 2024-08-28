<?php

//Incluir o arquivo de conexao com o banco de dados
include 'database.php';

//Resgatar as informações enviadas do formulário via POST
$id_aluno = $_POST['id_aluno'];
$nome_aluno = $_POST['nome_aluno'];
$email_aluno = $_POST['email_aluno'];
$telefone_aluno = $_POST['telefone_aluno'];

//Construir a string para realizar o comando em SQL
$sql_update = "UPDATE sge_alunos
SET nome_aluno = '$nome_aluno',
email_aluno = '$email_aluno',
telefone_aluno = '$telefone_aluno'
WHERE sge_alunos.id_aluno = '$id_aluno'";

if(mysqli_query($conexao,$sql_update)){
    header("location: listar_aluno.php");
}
else{
    echo "falha ao atualizar o cadastro. ";
}



