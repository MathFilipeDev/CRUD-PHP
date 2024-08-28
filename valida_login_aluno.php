<?php

//incluir arquivo do banco de dados
include 'database.php';

//iniciar uma sessão
session_start();

// recuperafr as informações do formulário
$login_sge = $_POST['login_sge'];
$password_sge = $_POST['password_sge'];


//criar uma validação para verificar se os campos do formulário foram preenchidos
if(empty($login_sge)){
    
    $_SESSION['mensagem'] = "Preencha o campo Login";

    header("Location: form_login_sge.php");
}
elseif(empty($password_sge)){
    $_SESSION['mensagem'] = "Preencha o campo Password";
    header("Location: form_login_sge.php");
}
else{
    //criar um SQL para validar os dados
    $sql_login = "SELECT * FROM sge_login_alunos WHERE login_sge = '$login_sge' AND password_sge = '$password_sge'";

    //Acessar e executar os valores do banco de dados
    $consulta_login = mysqli_query($conexao, $sql_login);

    //converter os resultados obtidos a um array associativo
    $dados_login = mysqli_fetch_array($consulta_login);

    //validar o login e senha com o retorno dos dados
    if($dados_login['login_sge'] == $login_sge and $dados_login['password_sge'] == $password_sge){
        
        //criar um array com os dados do usuário
        $usuario = array("login" => $dados_login['login_sge'], "senha" =>$dados_login['password_sge'], "perfil" => $dados_login["profile_sge"]);

        //colocar array de usuário na sessão
        $_SESSION['usuario'] = $usuario;

        //redirecionar para a página de painel 
        header("Location: painel_sge.php");
    }
    else{
        //criar na sessão uma mensagem de aviso com o erro 
        $_SESSION['mensagem'] = "Login ou senha inválidos";
        header("Location: form_login_sge.php");
    }
}