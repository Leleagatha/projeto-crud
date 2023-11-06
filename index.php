
<?php 
    include_once('partials/header.php');
    ?>
    <div class="container">
        <h1>Criar novos clientes</h1>
        
    <form action="cadastra.php" method="post"> 
        <label for="cpf" class="form-label">cpf:</label>
        <input type="text" name="cpf" id="cpf" class="form-control"/>

        <label for="nome"  class="form-label">nome:</label>
        <input type="text" name="nome" id="nome" class="form-control"/>

        <label for="nome"  class="form-label">email:</label>
        <input type="text" name="email" id="email" class="form-control"/>

        <label for="nome"  class="form-label">senha:</label>
        <input type="text" name="senha" id="senha" class="form-control"/>

        <label for="nome"  class="form-label">confirmarsenha:</label>
        <input type="text" name="confirmarsenha" id="confirmarsenha" class="form-control"/>

        <label for="telefone"  class="form-label">telefone:</label>
        <input type="text" name="telefone" id="tipo" class="form-control"/>  

        <label for="tipo"  class="form-label">tipo:</label>
        <input type="number" name="tipo" id="tipo" class="form-control"/>  

        <button class="btn btn-primary mt-4" type="submit">registrar</button>
    </form>
    <a class="btn btn-secondary mt-5" href="ver_usuario.php">Ver todos os clientes</a>
    </div>
    <?php 
    include_once('partials/footer.php');
    ?>