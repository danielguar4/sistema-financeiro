<?php 
//informações para conectar no banco de dados

$servidor = 'localhost';
$usuario = 'root';
$senha = 'root';
$bd = 'db_contabilidade';

$conexao = new mysqli($servidor, $usuario, $senha, $bd);

if ($conexao->connect_error) {
    die('Falha na Conexão'. $conexao->connect_error);
}
else {
    echo "Conectado com Sucesso";
}













?>