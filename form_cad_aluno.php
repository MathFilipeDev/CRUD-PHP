<?php include 'header.php'; ?>

<div class="container mt-4">
    <form action="cadastro_aluno.php" method="post">
        <div class="mb-3">
            <label for="nome_aluno" class="form-label">Nome do aluno:</label>
            <input type="text" name="nome_aluno" id="nome_aluno" class="form-control">
        </div>
        
        <div class="mb-3">
            <label for="email_aluno" class="form-label">E-mail:</label>
            <input type="text" name="email_aluno" id="email_aluno" class="form-control">
        </div>
        
        <div class="mb-3">
            <label for="telefone_aluno" class="form-label">Telefone:</label>
            <input type="text" name="telefone_aluno" id="telefone_aluno" class="form-control">
        </div>
        
        <div class="d-grid gap-3">
    <input type="submit" value="Cadastrar aluno" class="btn btn-dark text-white">
        </div>
    </form>
    
    <div class="mt-3">
        <a href="index.php" class="btn btn-warning">Voltar</a>
    </div>
</div>

<?php include 'footer.php'; ?>