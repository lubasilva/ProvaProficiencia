<?php
    require_once('./lib/function.php');
    require_once ('topo.php');
    $cliente = new Cliente('Nome', 'CPF', 'Endereco', 'email', 9128391239);

    $categoria = new Categoria('Categoira 1', 'CA01', 'Essa é uma adescrição da categoria');

    $produto = new Produto('PO01', 'Nome do Produto', 'Descrição do produto', 3.132);
    //$cliente->setNome('Cliente');
    $produto->setNomeCategoria('Minha cateogira do produto');
    //var_dump($produto->getNomeCategoria());
    session_start();
    $conn = criarConexaoPostgres();
    $query = sprintf("SELECT * FROM %s.produto ORDER BY updated_at desc limit 10", pg_escape_string(schema));
    $result = pg_query($conn, $query);
    if(!$result)
    {
        Error('Não foi póssível conectar ao banco: '. pg_last_error());
        exit();
    }

    //$rows = pg_fetch_all($result);
    //var_dump($rows);
    // pg_close($conn);

?>

    <div class="container">
        <h3 class="text-center">Meu site</h3>
        <div class="form-group">
            <ul>
                <li><a href="usuario.php">Criar usuário</a></li>
                <li><a href="categoria.php">Categoria</a></li>
            </ul>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Últimos Produtos</h3>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-responsive">
                        <thead>
                            <tr>
                                <th>Código do Produto</th>
                                <th>Nome do Produto</th>
                                <th>Descrição do Produto</th>
                                <th>Valor</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while($row = pg_fetch_object($result))
                                {
                                    echo '<tr>';
                                    echo '<td>';
                                    echo $row->codg_produto;
                                    echo '</td>';
                                    echo '<td>';
                                    echo $row->nome_produto;
                                    echo '</td>';
                                    echo '<td>';
                                    echo $row->desc_produto;
                                    echo '</td>';
                                    echo '<td>';
                                    echo $row->valor;
                                    echo '</td>';
                                    echo '<td> <form action="comprar.php" method="POST" target="_blank"><input type="submit" class="btn btn-default" value="Comprar"></form> <td>';
                                    echo '</tr>';
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    
</body>
</html>