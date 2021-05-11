<?php
    require_once 'topo.php';
    require_once 'lib/function.php';

    if (isset($_POST['nome']) || isset($_POST['cpf']) || isset($_POST['endereco']) || isset($_POST['telefone']) || isset($_POST['senha']) || isset($_POST['email']))
    {
        if (empty($_POST['nome']) || empty($_POST['cpf']) || empty($_POST['endereco']) || empty($_POST['telefone']) || empty($_POST['senha']) || empty($_POST['email']))
        {
            $_POST = '';
        }else{
            $senha = $_POST['senha'];
            $senha = md5($senha);
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            if (strlen($cpf) > 11 ||  !is_numeric($cpf))
            {
                Error('CPF INVÁLIDO');
                exit();
            }
            $telefone = $_POST['telefone'];
            if (strlen($telefone) > 14 || !is_numeric($telefone))
            {
                Error('Telefone inválido');
            }
            $endereco = $_POST['endereco'];
            $email = $_POST['email'];

            $connection = criarConexaoPostgres();
            $query = sprintf("select 1 from %s.cliente where cpf = '%s';",schema, pg_escape_string($cpf));
            $result = pg_query($query);
            if (pg_num_rows($result) == 0)
            {
                $query = sprintf("insert into cliente values ('%s', '%s', '%s', '%s', '%s', '%s');",
                pg_escape_string($nome), pg_escape_string($cpf), pg_escape_string($endereco), pg_escape_string($email), pg_escape_string($telefone), 
                pg_escape_string($senha));
                
                pg_query("BEGIN");
                try{
                    $result = pg_query($query);
                    pg_query("COMMIT");
                }catch(\Exception $e)
                {
                    Error($e->getMessage());
                    pg_query("ROLLBACK");
                }
                $success = true;

            }else{
                 Error('Cliente já existe');
            }
        }
    }
?>
<div class="container">
    <?php if (isset($success) && $success):?>
    <div class="alert alert-success">
        <h3> Usuário Criado com sucesso</h3>
    </div>
    <?php endif;?>
    <div class="card">
        <div class="col-md-8">
            <form action="usuario.php" method="POST">
                <div class="col-md-8">
                    <label for="nome">Nome Usuário</label>
                    <input class="form-control" type="text" name="nome" id="nome">
                </div>
                <div class="col-md-8">
                    <label for="cpf">CPF</label>
                    <input class="form-control" type="text" name="cpf" size="11">
                </div>
                <div class="col-md-8">
                    <label for="endereco">Endereço</label>
                    <input class="form-control" type="text" name="endereco">
                </div>
                <div class="col-md-8">
                    <label for="email">E-mail</label>
                    <input class="form-control" type="text" name="email">
                </div>
                <div class="col-md-8">
                    <label for="telefone">Telefone</label>
                    <input class="form-control" type="text" name="telefone" id="telefone">
                </div>
                <div class="col-md-8">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" name="senha">
                </div>
                <br/>
                <div class="col-md-12">
                    <input type="submit" name="Cadastrar" id="submit"  class="btn btn-md btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>