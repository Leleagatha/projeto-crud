<?php 
    include_once('partials/header.php');
    ?>
    <div class="container">
        <h1>Criar novos funcionarios</h1>
    <form action="cadastra.php" method="post"> 
        <label for="cpf" class="form-label">cpf:</label>
        <input type="text" name="cpf" id="cpf" class="form-control"/>

        <label for="nome"  class="form-label">nome:</label>
        <input type="text" name="nome" id="nome" class="form-control"/>

        <label for="nome"  class="form-label">telefone:</label>
        <input type="text" name="telefone" id="telefone" class="form-control"/>

        <label for="nome"  class="form-label">carga_horaria:</label>
        <input type="text" name="carga_horaria" id="carga_horaria" class="form-control"/>

        <label for="nome"  class="form-label">endereco:</label>
        <input type="text" name="endereco" id="endereco" class="form-control"/>

        <button class="btn btn-primary mt-4" type="submit">registrar</button>
    </form>
    <a class="btn btn-secondary mt-5" href="ver_funcionarios.php">Ver todos os funcionarios</a>
    </div>
    <?php 
    include_once('partials/footer.php');
    ?>