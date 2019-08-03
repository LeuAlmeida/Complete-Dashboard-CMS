<?php 
session_start();
include_once 'verifica_login.php';
include_once 'conexao.php';

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$celular = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_NUMBER_INT);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_SPECIAL_CHARS);
$rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_SPECIAL_CHARS);
$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_NUMBER_INT);
$complemento = filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_SPECIAL_CHARS);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_SPECIAL_CHARS);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);
$uf = filter_input(INPUT_POST, 'uf', FILTER_SANITIZE_SPECIAL_CHARS);
$placa_veiculo = filter_input(INPUT_POST, 'placa_veiculo', FILTER_SANITIZE_SPECIAL_CHARS);
$cor_veiculo = filter_input(INPUT_POST, 'cor_veiculo', FILTER_SANITIZE_SPECIAL_CHARS);
$marca_veiculo = filter_input(INPUT_POST, 'marca_veiculo', FILTER_SANITIZE_SPECIAL_CHARS);
$modelo_veiculo = filter_input(INPUT_POST, 'modelo_veiculo', FILTER_SANITIZE_SPECIAL_CHARS);
$ano_veiculo = filter_input(INPUT_POST, 'ano_veiculo', FILTER_SANITIZE_NUMBER_INT);
$equipamento = filter_input(INPUT_POST, 'equipamento', FILTER_SANITIZE_SPECIAL_CHARS);
$chip = filter_input(INPUT_POST, 'chip', FILTER_SANITIZE_SPECIAL_CHARS);
$empresa = filter_input(INPUT_POST, 'empresa', FILTER_SANITIZE_SPECIAL_CHARS);
$instalacao = filter_input(INPUT_POST, 'instalacao', FILTER_SANITIZE_SPECIAL_CHARS);
$manutencao = filter_input(INPUT_POST, 'manutencao', FILTER_SANITIZE_SPECIAL_CHARS);

$central = filter_input(INPUT_POST, 'central', FILTER_SANITIZE_SPECIAL_CHARS);
$local = filter_input(INPUT_POST, 'local', FILTER_SANITIZE_SPECIAL_CHARS);

$monitoramento = filter_input(INPUT_POST, 'monitoramento', FILTER_SANITIZE_SPECIAL_CHARS);
$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
$situacao = filter_input(INPUT_POST, 'situacao', FILTER_SANITIZE_SPECIAL_CHARS);
$vigencia = filter_input(INPUT_POST, 'vigencia', FILTER_SANITIZE_SPECIAL_CHARS);
$inicio = filter_input(INPUT_POST, 'inicio', FILTER_SANITIZE_SPECIAL_CHARS);
$vencimento = filter_input(INPUT_POST, 'vencimento', FILTER_SANITIZE_SPECIAL_CHARS);
$vendedor = filter_input(INPUT_POST, 'vendedor', FILTER_SANITIZE_SPECIAL_CHARS);
$observacao = filter_input(INPUT_POST, 'observacao', FILTER_SANITIZE_SPECIAL_CHARS);

/* $querySelect = $conexao->query("select equipamento from clientes");
$array_equipamentos = [];

while($equipamentos = $querySelect->fetch_assoc()):
	$equipamentos_existentes = $equipamentos['equipamento'];
	array_push($array_equipamentos,$equipamentos_existentes);
endwhile;
*/



$sql = "insert into clientes (nome,email,celular,cep,rua,numero,complemento,bairro,cidade,uf,placa_veiculo,cor_veiculo,marca_veiculo,modelo_veiculo,ano_veiculo,equipamento,chip,empresa,instalacao,manutencao,central,local,monitoramento,usuario,senha,situacao,vigencia,inicio,vencimento,vendedor,observacao) values ('$nome','$email','$celular','$cep','$rua','$numero','$complemento','$bairro','$cidade','$uf','$placa_veiculo','$cor_veiculo','$marca_veiculo','$modelo_veiculo','$ano_veiculo','$equipamento','$chip','$empresa','$instalacao','$manutencao','$central','$local','$monitoramento','$usuario','$senha','$situacao','$vigencia','$inicio','$vencimento','$vendedor','$observacao')";

$salvar = mysqli_query($conexao,$sql);

if(mysqli_affected_rows($conexao)):
    echo "<script>alert('Registro criado com sucesso.')</script>";
    echo '<script>window.location.href = "../listar-clientes.php";</script>';
  else:
    echo "<script>alert('Seu registro não foi criado. Verifique os dados e tente novamente!')</script>";
    echo '<script>window.location.href = back();</script>';
endif;

mysqli_close($conexao);

 ?>