<?php

$stmt = $con->prepare("UPDATE form_contato SET nome = ?, email = ? WHERE id = ?");
$stmt->bindParam(1, $nome);
$stmt->bindParam(2, $email);
$stmt->bindParam(3, $id);
$stmt->execute();
