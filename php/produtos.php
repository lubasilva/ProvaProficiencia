<?php
require_once 'topo.php';
require_once 'lib/function.php';
session_start();

$connection = criarConexaoPostgres();
if (!isset($_POST['codg_categoria']) && !empty($codg_categoria))
{
    Error ('Você acessou essa página de forma errada');
    exit();
}
$categoria = $_POST['codg_categoria'];
$query = sprintf("select * from produto p
                    INNER JOIN categoria cat on cat.codg_categoria = p.codg_categoria
                    where p.codg_categoria = '%s'", pg_escape_string($categoria));

$result = pg_query($query);
if (!$result)
{
    Error("Não foi possível encontrar os produtos");
    exit();
}
//$produto = new Produto('PO01', 'Nome do Produto', 'Descrição do produto', 3.132);


?>

<div class="container">

    <div class="card">
        <div class="card-header"><h3>Produtos</h3></div>
        <div class="card-body">
            <table class="table table-houver table-responsive">
                <thead>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Valor</th>
                </thead>
                <tbody>
                    <?php while($row = pg_fetch_object($result)):?>
                        <tr>
                            <td><?php echo $row->codg_produto?> </td>
                            <td><?php echo $row->nome_produto?></td>
                            <td><?php echo $row->desc_produto?></td>
                            <td><?php echo $row->valor?></td>
                        </tr>
                        <?php endwhile;?>
                </tbody>
            </table>
        </div>
    </div>

</div>