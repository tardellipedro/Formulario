<?php
require_once 'config.php';

//DADOS VINDOS DO FORMULARIO
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem= $_POST['mensagem'];
$data_atual= date('d/m/Y');
$hora_atual= date('H:i:s');

//preparar comando pra tabela
$smtp = $conn ->prepare("INSERT INTO mensagens (nome, email, mensagem, data, hora) VALUES (?, ?, ?, ?, ?)");//PREVINE SQL INJECTION 
$smtp->bind_param("sssss",$nome, $email, $mensagem, $data_atual, $hora_atual);


//caso seja executado corretamente
if ($smtp->execute())
{
    echo "Mensagem enviada com sucesso!";
}
else 
{
    echo "Erro no envio da mensagem.. ".$smtp->error;
}

//ENCERRA A CONEXÃO COM O SMTP E O CONN
$smtp->close();
$conn->close();

?>