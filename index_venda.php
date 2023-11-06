<?php 
    include_once('partials/header.php');
    ?>
    <div class="container">
        <h1>Criar novas vendas</h1>
    <form action="cadastra_venda.php" method="post"> 
        <!-- <label for="id" class="form-label">id:</label>
        <input type="text" name="id" id="id" class="form-control"/> -->

        <label for="nome"  class="form-label">valor:</label>
        <input type="text" name="valor" id="valor" class="form-control"/>

        <label for="nome"  class="form-label">forma pagamento:</label>
        <input type="text" name="forma_pagamento" id="forma_pagamento" class="form-control"/>

        <label for="nome"  class="form-label">clientes cpf:</label>
        <input type="text" name="fk_clientes_cpf" id="fk_clientes_cpf" class="form-control"/>

        <label for="nome"  class="form-label">funcionarios cpf:</label>
        <input type="text" name="fk_funcionarios_cpf" id="fk_funcionarios_cpf" class="form-control"/>

        <button class="btn btn-primary mt-4" type="submit">registrar</button>
    </form>
    <a class="btn btn-secondary mt-5" href="ver_venda.php">Ver todas as vendas</a>
    </div>
    <?php 
    include_once('partials/footer.php');
    ?>