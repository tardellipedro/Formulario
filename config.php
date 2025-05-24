<?php


//VARIÁVEIS
$server = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'flexnil_formulario';

//CONEXÃO COM BD
$conn = new mysqli($server, $usuario, $senha , $banco );

//VERIFICA CONEXÃO E ENVIA ERRO CASO CONEXÃO NÃO SUCEDIDA
if($conn ->connect_error)
{
    die("Falha ao se comunicar com o banco de dados: ".$conn->connect_error);
}


?>