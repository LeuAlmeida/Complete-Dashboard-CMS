<?php 
session_start();
include_once('verifica_login.php');
include_once 'conexao.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$queryDelete = $conexao->query("delete from funcionarios where id='$id'");

$salvar = mysqli_query($conexao,$queryDelete);

if(mysqli_affected_rows($conexao)):
    echo "<script>alert('Registro excluído com sucesso.')</script>";
    echo '<script>window.location.href = "../listar-funcionarios.php";</script>';
endif;

 ?>