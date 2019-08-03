<?php

// $link = new mysqli('localhost','root','','pessoas');
// $link->set_charset('utf8');

$utf8 = header("Content-Type: text/html; charset=utf-8");
$hostname = "webid.net.br";
$user = "webid_leu";
$password = "leo1807";
$database = "webid_adm1";
$conexao = mysqli_connect($hostname,$user,$password,$database);
$conexao->set_charset('utf8');

if(!$conexao){

	echo "Erro ao conectar com o banco de dados.";

}

?>