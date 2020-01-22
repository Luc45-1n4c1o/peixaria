<?php
  $nome = $_POST['nome'];
  $dtNasc = $_POST['datanascimento'];
  $uf = $_POST['uf'];
  $cidade = $_POST['cidade'];
  $bairro = $_POST['bairro'];
  $rua = $_POST['rua'];
  $numRua = $_POST['numRua'];
  $telefone = $_POST['telefone'];
  $cpf = $_POST['cpf'];
  

  $connect = mysql_connect('localhost','root','');
  $db = mysql_select_db('bemestar');

  $query = "INSERT INTO pedido_item (nome, dt_nasc, uf, cidade, bairro, rua, num_rua, telefone, cpf) VALUES ('$nome','$dtNasc','$uf','$cidade','$bairro','$rua','$numRua','$telefone','$cpf')";

  $insert = mysql_query($query,$connect);
  $array = mysql_fetch_array($select);
        
  if($insert){
    echo"<script language='javascript' type='text/javascript'>alert('Pedido de item registrado com sucesso no sistema!');window.location.href='index.html'</script>";
                    
  }else{
    echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='Cadastro.html'</script>";
  }        
?>