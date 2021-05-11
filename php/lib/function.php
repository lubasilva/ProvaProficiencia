<?php

require_once ('models/categoria.php');
require_once 'models/cliente.php';
require_once 'models/produto.php';
require_once 'config.php';



function criarConexaoPostgres()
{
    try{
        $connection = pg_connect("host=".link_bd." port=".port." dbname=".banco. " user=".usuario." password=".senha );
    }
    catch(\Exception $e){
        throw new Exception($e->getMessage());
    }
    return $connection;
}

function Error($message)
{
    $error = '<div class="alert alert-danger">';
    if (is_array($message) && count($message) > 0)
    {
        foreach($message as $msg)
        {
            $error .= '<p>' . $msg . '</p>';
        }
    }else $error .= $message;
    $error .= '</div>';
    print( $error);
}


function verificarSenha($senha, $hash)
{
    return md5($senha) === $hash ? true:false;
}
?>