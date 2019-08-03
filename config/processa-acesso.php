<?php 
session_start();
include_once 'verifica_login.php';
include_once 'conexao.php';

$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_EMAIL);


/* $querySelect = $conexao->query("select equipamento from clientes");
$array_equipamentos = [];

while($equipamentos = $querySelect->fetch_assoc()):
	$equipamentos_existentes = $equipamentos['equipamento'];
	array_push($array_equipamentos,$equipamentos_existentes);
endwhile;
*/



$sql = "insert into acesso (usuario,senha) values ('$usuario',md5('$senha'))";

$salvar = mysqli_query($conexao,$sql);


if(mysqli_affected_rows($conexao)):
    echo "<script>alert('Registro criado com sucesso.')</script>";
    echo '<script>window.location.href = "../painel.php";</script>';
  else:
    echo "<script>alert('Seu registro não foi criado. Verifique os dados e tente novamente!')</script>";
    echo '<script>window.location.href = back();</script>';
endif;


mysqli_close($conexao);

 ?>