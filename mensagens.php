<?php
require_once 'config.php';

$senhaSecreta ="123";
if ($_SERVER["REQUEST_METHOD"]== "POST")
{
   $senhadigitada = $_POST['senha'];


   if ($senhadigitada === $senhaSecreta);
   $sql ="SELECT * FROM mensagens";
   $result = $conn->query($sql);
}  
else
    echo "<h1>Senha inválida!</h1>";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver respostas</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <form method="post">
        <label for="senha">Senha</label>
        <input type="password" name="senha" placeholder="Digite sua senha" required>

        <button type="submit" >Enviar</button>

    </form>
    
    <div class= "mensagens">
    <?php if(isset($result) && $result->num_rows >0) : ?>
        <h2 style= "text-align:center">Mensagens</h2>
        <ul>
            <?php while($row = $result->fetch_assoc()) :?>
            <li>
                <strong>Nome: </strong> <?php echo $row["Nome"]; ?><br>
                <strong>Email: </strong> <?php echo $row["Email"]; ?><br>
                <strong>Mensagens: </strong> <?php echo $row["mensagem"]; ?><br>
            <strong>Data e Hora: </strong> <?php echo $row["data"]." às ".$row["hora"]; ?><br><br>
            </li>
                <?php endwhile; ?>
        </ul>
            <?php else  : ?>
                <p>Nenhuma mensagem encontrada! </p>
            <?php endif; ?>
            </div>
</body>
</html>