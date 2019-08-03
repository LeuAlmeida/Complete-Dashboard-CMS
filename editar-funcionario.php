<?php
session_start();
include_once('config/verifica_login.php');
include_once('config/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Editar Cliente | Painel Administrativo Web ID</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />

  


</head>

<body>
  <?php include_once 'inc/header.inc.php' ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

          <!-- Formulário de Cadastro -->
          <?php

                  $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
                  $_SESSION['id'] = $id;
                  $querySelect = $conexao->query("select * from funcionarios where id='$id'");

                  while($registros = $querySelect->fetch_assoc()):
                      $nome = $registros['nome'];
                      $email = $registros['email'];
                      $celular = $registros['celular'];
                      $cep = $registros['cep'];
                      $rua = $registros['rua'];
                      $numero = $registros['numero'];
                      $complemento = $registros['complemento'];
                      $bairro = $registros['bairro'];
                      $cidade = $registros['cidade'];
                      $uf = $registros['uf'];
                      $nascimento = $registros['nascimento'];
                      $clt = $registros['clt'];
                      $serie = $registros['serie'];
                      $funcao = $registros['funcao'];
                      $identidade = $registros['identidade'];
                      $rg = $registros['rg'];
                      $pf = $registros['pf'];
                      $salario = $registros['salario'];
                      $admissao = $registros['admissao'];
                      $demissao = $registros['demissao'];
                      $funcionario = $registros['funcionario'];
                      $observacao = $registros['observacao'];
                  endwhile;
                  ?>
          <div class="col-sm-12">
                <div class="card">
                  <div class="card-header display-4">
                    <i class="fa fa-align-justify"></i> Editar Funcionários <span class="h1 btn btn-dark" style="float:right;">#<?php echo $id ?></span></div>
                  <div class="card-body">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body">

                    <form method="post" action="config/update-funcionario.php">
                    <div class="row">
                      <!-- LINHA 1 -->
                      <div class="h3 col-sm-12 mb-1">
                      <span class="badge badge-lg navbar default-layout text-white text-uppercase mb-2">Informações Pessoais</span>
                      </div>
                      <div class="form-group col-sm-6">
                        <label for="nome">Nome</label>
                        <input class="form-control" id="nome" name="nome" type="text" value="<?php echo $nome ?>">
                      </div>

                      

                      <div class="form-group col-sm-4">
                        <label for="email">E-mail</label>
                        <input class="form-control" id="email" name="email" type="text" value="<?php echo $email ?>">
                      </div>

                      <div class="form-group col-sm-2">
                        <label for="celular">Celular</label>
                        <input class="form-control" id="celular" name="celular" type="text" maxlength="15" value="<?php echo $celular ?>">
                      </div>

                      <div class="form-group col-sm-5">
                        <label for="rg">RG</label>
                        <input class="form-control" id="rg" type="text" name="rg" value="<?php echo $rg ?>">
                      </div>

                      <div class="form-group col-sm-4">
                        <label for="identidade">CPF / CNPJ</label>
                        <input class="form-control" id="identidade" type="text" name="identidade" maxlength="4" value="<?php echo $identidade ?>">
                      </div>

                      <!-- LINHA 2 -->

                      <div class="form-group col-sm-3">
                        <label for="cep">CEP</label>
                        <input class="form-control" name="cep" type="text" id="cep" value="" size="10" maxlength="9"
               onblur="pesquisacep(this.value);" value="<?php echo $cep ?>">
                      </div>

                      <div class="form-group col-sm-4">
                        <label for="rua">Endereço</label>
                        <input class="form-control" name="rua" type="text" id="rua" size="60" value="<?php echo $rua ?>">
                      </div>

                      <div class="form-group col-sm-1">
                        <label for="numero">Número</label>
                        <input class="form-control" name="numero" id="numero" type="text" value="<?php echo $numero ?>">
                      </div>

                      <div class="form-group col-sm-2">
                        <label for="complemento">Complemento</label>
                        <input class="form-control" name="complemento" id="complemento" type="text" value="<?php echo $complemento ?>">
                      </div>

                      
                      <div class="form-group col-sm-2">
                        <label for="bairro">Bairro</label>
                        <input class="form-control" name="bairro" type="text" id="bairro" size="40" value="<?php echo $bairro ?>">
                      </div>

                      <div class="form-group col-sm-2">
                        <label for="cidade">Cidade</label>
                        <input class="form-control" name="cidade" type="text" id="cidade" size="40" value="<?php echo $cidade ?>">
                      </div>

                      <div class="form-group col-sm-1">
                        <label for="uf">Estado</label>
                        <input class="form-control" name="uf" type="text" id="uf" size="2" value="<?php echo $uf ?>">
                      </div>



                      <!-- LINHA 3 -->
                      <div class="h3 col-sm-12 mb-1">
                      <span class="badge badge-lg navbar default-layout text-white text-uppercase mt-4 mb-2">Informações para Consulta</span>
                      </div>

                      <div class="form-group col-sm-4">
                        <label for="nascimento">Data de Nascimento</label>
                        <div class="input-group">
                          <div class="input-group-prepend bg-light border-primary">
                            <span class="input-group-text">
                              <i class="fas fa-calendar-alt bg-transparent"></i>
                            </span>
                          </div>
                          <input class="form-control" id="nascimento" name="nascimento" value="<?php echo $nascimento ?>" maxlength="12" type="text"/>
                         </div>
                      </div>

                      <div class="form-group col-sm-4">
                        <label for="clt">Carteira de Trabalho</label>
                        <input class="form-control" id="clt" type="text" name="clt" value="<?php echo $clt ?>">
                      </div>

                      <div class="form-group col-sm-4">
                        <label for="serie">Série</label>
                        <input class="form-control" id="serie" type="text" name="serie" value="<?php echo $serie ?>">
                      </div>

                      <div class="form-group col-sm-4">
                        <label for="funcao">Função</label>
                        <input class="form-control" id="funcao" type="text" name="funcao" value="<?php echo $funcao ?>">
                      </div>

                      <!-- LINHA 4 -->
                      

                      <div class="form-group col-sm-4">
                        <label for="pf">Pessoa Física</label>
                        <select class="form-control" id="pf" type="text" name="pf">
                          <option><?php echo $pf ?></option>
                          <option>Sim</option>
                          <option>Não</option>
                        </select>
                      </div>

                       <div class="form-group col-sm-4">
                        <label for="admissao">Data de Admissão</label>
                         <div class="input-group">
                          <div class="input-group-prepend bg-light border-primary">
                            <span class="input-group-text">
                              <i class="fas fa-calendar-alt bg-transparent"></i>
                            </span>
                          </div>
                          <input class="form-control" id="admissao" name="admissao" value="<?php echo $admissao ?>" maxlength="12" type="text"/>
                         </div>
                       </div>


                       <!-- LINHA 5 -->
                       <div class="form-group col-sm-4">
                        <label for="demissao">Data de Demissão</label>
                         <div class="input-group">
                          <div class="input-group-prepend bg-light border-primary">
                            <span class="input-group-text">
                              <i class="fas fa-calendar-alt bg-transparent"></i>
                            </span>
                          </div>
                          <input class="form-control" id="demissao" name="demissao" value="<?php echo $demissao ?>" maxlength="12" type="text"/>
                         </div>
                       </div>

                       
                       <div class="form-group col-sm-4">
                        <label for="salario">Salário</label>
                         <div class="input-group">
                          <div class="input-group-prepend bg-light border-primary">
                            <span class="input-group-text bg-transparent">
                              R$
                            </span>
                          </div>
                          <input class="form-control" id="salario" name="salario" value="<?php echo $salario ?>" type="text"/>
                          <div class="input-group-append bg-light border-primary">
                            <span class="input-group-text bg-transparent">
                              ,00
                            </span>
                          </div>
                         </div>
                       </div>

                       <div class="form-group col-sm-4">
                        <label for="funcionario">Funcionário Bloqueado</label>
                        <select class="form-control" id="funcionario" type="text" name="funcionario">
                          <option><?php echo $funcionario ?></option>
                          <option>Sim</option>
                          <option>Não</option>
                        </select>
                      </div>

                      

                      <!-- ÚLTIMA LINHA -->
                      <div class="form-group col-sm-12">
                        <label for="observacao">Observações</label>
                        <textarea class="form-control" id="observacao" type="textarea" name="observacao" rows="5"><?php echo $observacao ?></textarea>
                      </div>



                    </div>

                    <div class="row">
                      <div class="form-group col-sm-12 mt-4 ">
                        <a class="btn btn-rounded btn-danger" style="cursor: pointer;" href="javascript:history.back()">Cancelar</a>
                      
                        <button class="btn btn-rounded btn-primary" type="submit" value="salvar">Salvar</button>
                      </div>
                    </div>

                    </form>
                    
                </div>
              </div>
          
        <!-- content-wrapper ends -->
        <?php include_once 'inc/footer.inc.php' ?>