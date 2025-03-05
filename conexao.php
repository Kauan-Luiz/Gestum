<?php

$hostname = "localhost"; //nome da hospedagem
$usuario = "root"; //usuario padrão, root
$senha = ""; //senha do banco (normalmente sem senha)
$db = "gestum"; //nome do banco de dados no php my admin ou mysql


$conexao = new mysqli($hostname, $usuario, $senha, $db);

/*
if ($conexao->connect_errno) {
    echo "Falha ao conectar: " . $mysqli->connect_error;
} else {
    echo "Conexão efetuada com sucesso!";
}
*/

?>
