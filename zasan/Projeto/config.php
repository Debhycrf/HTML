<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulario';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

/* VERIFICAR SE A CONEXÃO TA FUNCIONANDO
if($conexao->connect_errno)
{
    echo "Erro";
}
else
{
    echo "Conexão efetuada com sucesso";
}*/

?>
