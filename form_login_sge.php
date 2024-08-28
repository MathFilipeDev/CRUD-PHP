<?php include 'header.php'; ?>

<div class="container">
    <form action="valida_login_aluno.php" method="post">
        <div class="mb-3">
            <label for="login_sge" class="form-label">Nome de usuário</label>
            <input type="text" class="form-control" name="login_sge" id="login_sge" placeholder="Digite o Usuário">
        </div>
        
        <div class="mb-3">
            <label for="password_sge" class="form-label">Senha</label>
            <input type="password" class="form-control" name="password_sge" id="password_sge" placeholder="Digite a Senha">
        </div>
        
        <div class="mb-3 d-grid gap-2">
            <input type="submit" class="btn btn-dark text-white btn-block" value="Entrar">
        </div>
        
        <div class="mb-3 text-center">
            <a href="#">Esqueceu a senha?</a>
            ou
            <a href="form_cad_aluno.php">Cadastre-se</a>
        </div>
        
        <div class="mt-3">
        <a href="index.php" class="btn btn-warning">Voltar</a>
    </div>
    </form>
</div>

<?php include 'footer.php'; ?>