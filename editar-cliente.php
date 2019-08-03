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

                  $querySelect = $conexao->query("select * from clientes where id='$id'");



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

                      $placa_veiculo = $registros['placa_veiculo'];

                      $cor_veiculo = $registros['cor_veiculo'];

                      $marca_veiculo = $registros['marca_veiculo'];

                      $modelo_veiculo = $registros['modelo_veiculo'];

                      $ano_veiculo = $registros['ano_veiculo'];

                      $equipamento = $registros['equipamento'];

                      $chip = $registros['chip'];

                      $empresa = $registros['empresa'];

                      $instalacao = $registros['instalacao'];

                      $manutencao = $registros['manutencao'];

                      $central = $registros['central'];

                      $local = $registros['local'];

                      $monitoramento = $registros['monitoramento'];

                      $usuario = $registros['usuario'];

                      $senha = $registros['senha'];

                      $situacao = $registros['situacao'];

                      $vigencia = $registros['vigencia'];

                      $inicio = $registros['inicio'];

                      $vencimento = $registros['vencimento'];

                      $vendedor = $registros['vendedor'];

                      $observacao = $registros['observacao'];

                      

                  endwhile;

                  ?>

          <div class="col-sm-12">

                <div class="card">

                  <div class="card-header display-4">

                    <i class="fa fa-align-justify"></i> Editar Cliente <span class="h1 btn btn-dark" style="float:right;">#<?php echo $id ?></span></div>

                  <div class="card-body">



                  



              <div class="col-sm-12">

                <div class="card">

                  <div class="card-body">



                    <form method="post" action="config/update-cliente.php">

                    <div class="row">

                      <!-- LINHA 1 -->

                      <div class="h2 col-sm-12 mb-1">

                      <span class="badge badge-lg navbar default-layout text-white text-uppercase mb-2">Informações Pessoais</span>

                      </div>

                      <div class="form-group col-sm-5">

                        <label for="nome">Nome</label>

                        <input class="form-control" id="nome" name="nome" type="text" value="<?php echo $nome ?>">

                      </div>



                      <div class="form-group col-sm-4">

                        <label for="email">E-mail</label>

                        <input class="form-control" id="email" name="email" type="email" value="<?php echo $email ?>">

                      </div>



                      <div class="form-group col-sm-3">

                        <label for="celular">Celular</label>

                        <input class="form-control" id="celular" name="celular" type="text" maxlength="15" value="<?php echo $celular ?>">

                      </div>



                      <!-- LINHA 2 -->



                      <div class="form-group col-sm-2">

                        <label for="cep">CEP</label>

                        <input class="form-control" name="cep" type="text" id="cep" value="<?php echo $cep ?>" size="10" maxlength="9"

               onblur="pesquisacep(this.value);" placeholder="Digite o CEP" >

                      </div>



                      <div class="form-group col-sm-3">

                        <label for="rua">Endereço</label>

                        <input class="form-control" name="rua" type="text" id="rua" size="60" value="<?php echo $rua ?>">

                      </div>



                      <div class="form-group col-sm-1">

                        <label for="numero">Número</label>

                        <input class="form-control" name="numero" id="numero" value="<?php echo $numero ?>" type="text">

                      </div>



                      <div class="form-group col-sm-1">

                        <label for="complemento">Compl.</label>

                        <input class="form-control" name="complemento" value="<?php echo $complemento ?>" id="complemento" type="text">

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

                      <div class="h2 col-sm-12 mb-1">

                      <span class="badge badge-lg navbar default-layout text-white text-uppercase mt-4 mb-2">Informações para Consulta</span>

                      </div>



                      <div class="form-group col-sm-2">

                        <label for="placa_veiculo">Placa</label>

                        <input class="form-control" id="placa_veiculo" type="text" name="placa_veiculo" maxlength="8" value="<?php echo $placa_veiculo ?>">

                      </div>



                      <div class="form-group col-sm-3">

                        <label for="cor_veiculo">Cor do Veículo</label>

                        <input class="form-control" id="cor_veiculo" type="text" name="cor_veiculo" value="<?php echo $cor_veiculo ?>">

                      </div>



                      <div class="form-group col-sm-2">

                        <label for="marca_veiculo">Marca do Veículo</label>

                        <input class="form-control" id="marca_veiculo" type="text" name="marca_veiculo" value="<?php echo $marca_veiculo ?>">

                      </div>



                      <div class="form-group col-sm-3">

                        <label for="modelo_veiculo">Modelo do Veículo</label>

                        <input class="form-control" id="modelo_veiculo" type="text" name="modelo_veiculo" value="<?php echo $modelo_veiculo ?>">

                      </div>



                      <div class="form-group col-sm-2">

                        <label for="ano_veiculo">Ano do Veículo</label>

                        <input class="form-control" id="ano_veiculo" type="int" name="ano_veiculo" maxlength="4" value="<?php echo $ano_veiculo ?>">

                      </div>



                      <!-- LINHA 4 -->

                      <div class="form-group col-sm-4">

                        <label for="equipamento">ID do Equipamento</label>

                        <input class="form-control" id="equipamento" type="text" name="equipamento" value="<?php echo $equipamento ?>">

                      </div>

                      <div class="form-group col-sm-4">

                        <label for="chip">Número do Chip</label>

                        <input class="form-control" id="chip" type="text" name="chip" value="<?php echo $chip ?>">

                      </div>



                      <div class="form-group col-sm-4">

                        <label for="empresa">Empresa</label>

                        <select class="form-control" id="empresa" type="text"  name="empresa">

                          <option><?php echo $empresa ?></option>

                          <option>ACASP Próprio</option>

                          <option>ACASP/Insat</option>

                          <option>Foco</option>

                          <option>Insat</option>

                          <option>Insat Protege</option>

                          <option>Joacir</option>

                          <option>STI</option>

                          <option>TRA</option>

                          <option>Track Seg</option>

                        </select>

                      </div>



                       <div class="form-group col-sm-3">

                        <label for="instalacao">Data de Instalação</label>

                         <div class="input-group">

                          <div class="input-group-prepend bg-light border-primary">

                            <span class="input-group-text">

                              <i class="fas fa-calendar-alt bg-transparent"></i>

                            </span>

                          </div>

                          <input class="form-control" id="instalacao" name="instalacao" value="<?php echo $instalacao ?>" maxlength="12" type="text"/>

                         </div>

                       </div>



                       <div class="form-group col-sm-3">

                        <label for="manutencao">Última manutenção</label>

                         <div class="input-group">

                          <div class="input-group-prepend bg-light border-primary">

                            <span class="input-group-text">

                              <i class="fas fa-calendar-alt bg-transparent"></i>

                            </span>

                          </div>

                          <input class="form-control" id="manutencao" name="manutencao" value="<?php echo $manutencao ?>" maxlength="12" type="text"/>

                         </div>

                       </div>

                       <div class="form-group col-sm-3">

                        <label for="central">Possui 0800</label>

                        <select class="form-control" id="central" type="text" name="central">

                          <option><?php echo $central ?></option>

                          <option>Sim</option>

                          <option>Não</option>

                        </select>

                      </div>

                      <div class="form-group col-sm-3">

                        <label for="local">Local do Equipamento</label>

                        <input class="form-control" id="local" type="text" name="local" value="<?php echo $local ?>">

                      </div>



                       <!-- LINHA 5 -->

                       <div class="form-group col-sm-3">

                        <label for="monitoramento">Valor do Monitoramento</label>

                         <div class="input-group">

                          <div class="input-group-prepend bg-light border-primary">

                            <span class="input-group-text bg-transparent">

                              R$

                            </span>

                          </div>

                          <input class="form-control" id="monitoramento" name="monitoramento" value="<?php echo $monitoramento ?>" type="text"/>

                          <div class="input-group-append bg-light border-primary">

                            <span class="input-group-text bg-transparent">

                              ,00

                            </span>

                          </div>

                         </div>

                       </div>



                       <div class="form-group col-sm-3">

                        <label for="usuario">Usuário</label>

                        <input class="form-control" id="usuario" type="text" name="usuario" value="<?php echo $usuario ?>">

                      </div>



                      <div class="form-group col-sm-3">

                        <label for="senha">Senha</label>

                        <input class="form-control" id="senha" type="text" name="senha" value="<?php echo $senha ?>">

                      </div>



                      <div class="form-group col-sm-3">

                        <label for="situacao">Situação</label>

                        <select class="form-control" id="situacao" type="text"  name="situacao">

                          <option><?php echo $situacao ?></option>

                          <option>Ativo</option>

                          <option>Suspenso</option>

                          <option>Cancelado</option>

                          <option>Funcionário</option>

                          <option>Retirado</option>

                          <option>Sem mensalidade</option>

                        </select>

                      </div>

                      <!-- LINHA 6 -->

                      <div class="form-group col-sm-3">

                        <label for="vigencia">Vigência</label>

                         <div class="input-group">

                          <input class="form-control" id="vigencia" name="vigencia" value="<?php echo $vigencia ?>" type="int"/>

                          <div class="input-group-append bg-light border-primary">

                            <span class="input-group-text bg-transparent">

                              Meses

                            </span>

                          </div>

                         </div>

                       </div>



                       



                      <div class="form-group col-sm-3">

                        <label for="inicio">Início do Contrato</label>

                         <div class="input-group">

                          <div class="input-group-prepend bg-light border-primary">

                            <span class="input-group-text">

                              <i class="fas fa-calendar-alt bg-transparent"></i>

                            </span>

                          </div>

                          <input class="form-control" id="inicio" name="inicio" value="<?php echo $inicio ?>" maxlength="12" type="text"/>

                         </div>

                       </div>



                       <div class="form-group col-sm-3">

                        <label for="vencimento">Vencimento do Contrato</label>

                         <div class="input-group">

                          <div class="input-group-prepend bg-light border-primary">

                            <span class="input-group-text">

                              <i class="fas fa-calendar-alt bg-transparent"></i>

                            </span>

                          </div>

                          <input class="form-control" id="vencimento" name="vencimento" value="<?php echo $vencimento ?>" maxlength="12" type="text"/>

                         </div>

                       </div>



                       <div class="form-group col-sm-3">

                        <label for="vendedor">Vendedor</label>

                        <input class="form-control" id="vendedor" type="text" name="vendedor" value="<?php echo $vendedor ?>">

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