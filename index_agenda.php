
<?php 
    include_once('partials/header.php');
    ?>
    <div class="container">
        <h1>Criar nova agenda</h1>
    <form action="cadastra_agenda.php" method="post"> 
        <label for="id" class="form-label">id:</label>
        <input type="text" name="id" id="id" class="form-control"/>

        <label for="nome"  class="form-label">horario:</label>
        <input type="text" name="horario" id="horario" class="form-control"/>

        <label for="nome"  class="form-label">data:</label>
        <input type="text" name="data" id="data" class="form-control"/>

        <label for="nome"  class="form-label">clientes cpf:</label>
        <input type="text" name="fk_cliente_cpf" id="fk_cliente_cpf" class="form-control"/>

        <button class="btn btn-primary mt-4" type="submit">registrar</button>
    </form>
    <a class="btn btn-secondary mt-5" href="ver_agenda.php">Ver todas as agendas</a>
    </div>
    <?php 
    include_once('partials/footer.php');
    ?>