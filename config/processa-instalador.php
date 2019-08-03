<?php 
session_start();
include_once 'verifica_login.php';
include_once 'conexao.php';

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
$celular = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_SPECIAL_CHARS);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_SPECIAL_CHARS);
$rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_SPECIAL_CHARS);
$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_SPECIAL_CHARS);
$complemento = filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_SPECIAL_CHARS);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_SPECIAL_CHARS);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);
$uf = filter_input(INPUT_POST, 'uf', FILTER_SANITIZE_SPECIAL_CHARS);
$nascimento = filter_input(INPUT_POST, 'nascimento', FILTER_SANITIZE_SPECIAL_CHARS);
$fantasia = filter_input(INPUT_POST, 'fantasia', FILTER_SANITIZE_SPECIAL_CHARS);
$pagamento = filter_input(INPUT_POST, 'pagamento', FILTER_SANITIZE_SPECIAL_CHARS);
$identidade = filter_input(INPUT_POST, 'identidade', FILTER_SANITIZE_SPECIAL_CHARS);
$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_SPECIAL_CHARS);
$pf = filter_input(INPUT_POST, 'pf', FILTER_SANITIZE_SPECIAL_CHARS);
$salario = filter_input(INPUT_POST, 'salario', FILTER_SANITIZE_SPECIAL_CHARS);
$admissao = filter_input(INPUT_POST, 'admissao', FILTER_SANITIZE_SPECIAL_CHARS);
$demissao = filter_input(INPUT_POST, 'demissao', FILTER_SANITIZE_SPECIAL_CHARS);
$instalador = filter_input(INPUT_POST, 'instalador', FILTER_SANITIZE_SPECIAL_CHARS);
$contato = filter_input(INPUT_POST, 'contato', FILTER_SANITIZE_SPECIAL_CHARS);
$observacao = filter_input(INPUT_POST, 'observacao', FILTER_SANITIZE_SPECIAL_CHARS);


$sql = "insert into instaladores (nome,email,contato,celular,cep,rua,numero,complemento,bairro,cidade,uf,nascimento,fantasia,pagamento,identidade,rg,pf,salario,admissao,demissao,instalador,observacao) values ('$nome','$email','$contato','$celular','$cep','$rua','$numero','$complemento','$bairro','$cidade','$uf','$nascimento','$fantasia','$pagamento','$identidade','$rg','$pf','$salario','$admissao','$demissao','$instalador','$observacao')";

$salvar = mysqli_query($conexao,$sql);


if(mysqli_affected_rows($conexao)):
    echo "<script>alert('Registro criado com sucesso.')</script>";
    echo '<script>window.location.href = "../listar-instaladores.php";</script>';
  else:
    echo "<script>alert('Seu registro não foi criado. Verifique os dados e tente novamente!')</script>";
    echo '<script>window.location.href = back();</script>';
endif;

mysqli_close($conexao);

 ?>