<?php
session_start();

include 'header.php';


if (!isset($_SESSION['usuario'])) {
    header('Location: login.php'); 
    exit();
}

$usuario = $_SESSION['usuario'];
?>

<div class="container mt-4">
    <?php if ($usuario['perfil'] != "ryangay") : ?>
        <p>Você tem permissão de acesso: <?php echo $usuario['perfil']; ?></p>
        <h3>Seja bem-vindo: <?php echo $usuario['login']; ?></h3>
        <div class="opcoes">
            <a href="listar_aluno.php" class="btn btn-dark">Lista de Alunos</a>
        </div>
        <div class="text-left mt-4">
            <a href="index.php" class="btn btn-warning">Sair</a>
        </div>
    <?php else : ?>
        <!-- Conteúdo HTML - Perfil ADMIN -->
        <div class="card">
            <div class="card-body">
                <h2 class="card-title text-center">Painel administrativo - SGVD</h2>
                <p class="card-text text-center">Você tem permissão de acesso: <?php echo $usuario['perfil']; ?></p>
                <h3 class="card-subtitle text-center">Seja bem-vindo: <?php echo $usuario['login']; ?></h3>
                <div class="text-center mt-4">
                    <a href="index.php" class="btn btn-warning">Sair</a>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Opções de Gerenciamento</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="listar_aluno.php" class="btn btn-dark text-white">Lista de alunos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php include 'footer.php'; ?>