<?php

header("Content-type: text/html; charset=utf-8");

include("conexao.php");

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$mensagem = $_POST['mensagem'];

if (strlen($mensagem) > 100) {
    echo "A mensagem deve possuir no máximo 100 caracteres.<br>"; ?>
     
    <a href="http://local.josimarpescados.com/" 
    style="width: 200px; text-align: center; border: 3px solid #333; font-size: 1.2rem; color: #fff;
    padding: 5px 15px; height: 50px; line-height: 50px; background-color: #ddd; border-radius: 5px">Voltar</a>
    <?php
    exit;
}


$conn = getConnection();

//PDO - PHP Data Objects
$sql = "INSERT INTO form_contato (nome, sobrenome, email, telefone, endereco, mensagem) VALUES(?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bindParam(1, $nome);
$stmt->bindParam(2, $sobrenome);
$stmt->bindParam(3, $email);
$stmt->bindParam(4, $telefone);
$stmt->bindParam(5, $endereco);
$stmt->bindParam(6, $mensagem);


if ($stmt->execute()) {
    require_once 'form_contato_msg_success.php';
} else {
    echo "<p style='color: #f00'>Ocorreu um erro ao tentar salvar os dados no banco.</p>";
}

exit;

// var_dump($stmt->fetchAll());

/*

// checando conexão
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//string de inserção
$sql = "INSERT INTO form_contato (`nome`, `sobrenome`, `email`, `telefone`, `endereco`, `mensagem`)
VALUES ('$nome','$sobrenome','$email','$telefone','$endereco','$msg')";

//verifico se houve sucesso na tentativa de persistir os dados no banco
if (mysqli_query($conn, $sql)) {
  
  require_once 'form_contato_msg_success.php';

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//encerro a conexão com o banco de dados
mysqli_close($conn);
*/
