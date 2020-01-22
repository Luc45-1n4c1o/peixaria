<?php

$result = $con->query("SELEC nome, sobrenome, email FROM form_contato");

while ($row = $result->fetch(PDO::FETCH_OBJ)) {
    echo $row->nome . "<br/>";
    echo $row->sobrenome . "<br/>";
    echo $row->email . "<br/>";
}
