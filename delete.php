<?php

$stmt = $con->prepare("DELETE FROM form_contato WHERE id = ?");
$stmt->bindParam(1, $id);
$stmt->execute();
