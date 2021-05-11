<?php
    session_start();
    require_once  'topo.php';
    require_once 'lib/function.php';
    $connection = criarConexaoPostgres();

    $query = sprintf("select * from categoria");
    $result = pg_query($query);

    if (!$result)
    {
        Error("Categoria não encontrada");
    }

?>

<div class="conainer">
    <div class="card">
        <div class="card card-header">Categorias</div>
        <div class="card-body">
            <table class="table table-hover table-responsive">
                <thead>
                    <th>Códgio</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>#</th>
                </thead>
                <tbody>
                    <?php
                        while($row = pg_fetch_object($result)):
                    ?>
                    <tr>
                        <td> <?php echo $row->codg_categoria;?></td>
                        <td> <?php echo $row->nome_categoria;?></td>
                        <td> <?php echo $row->desc_categoria;?></td>
                        <td> <form action="produtos.php" method="post">
                            <input type="hidden" name="codg_categoria" id="categoria" value="<?php echo $row->codg_categoria?>">
                            <input type="submit" name="submit" value="Visualizar Produtos" id="submit" class="btn btn-primary">
                        </form><td>
                    </tr>
                    <?php endwhile;?>
                </tbody>
            </table>
        </div>
    </div>
</div>