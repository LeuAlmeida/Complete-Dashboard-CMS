<?php

session_start();

include_once('config/verifica_login.php');

?>



<!DOCTYPE html>

<html lang="pt-br">



<head>

  <!-- Required meta tags -->

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Cadastrar Cliente | Painel Administrativo Web ID</title>

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

          <div class="col-sm-12">

                <div class="card">

                  <div class="card-header display-4">

                    <i class="fa fa-align-justify"></i> Cadastro de Cliente</div>

                  <div class="card-body">



              <div class="col-sm-12">

                <div class="card">

                  <div class="card-body">



                    <form method="post" action="config/processa-cliente.php">

                    <div class="row">

                      <!-- LINHA 1 -->

                      <div class="h3 col-sm-12 mb-1">

                      <span class="badge badge-lg navbar default-layout text-white text-uppercase mb-2">Informações Pessoais</span>

                      </div>

                      <div class="form-group col-sm-5">

                        <label for="nome">Nome</label>

                        <input class="form-control" id="nome" name="nome" type="text" placeholder="Nome completo do cliente">

                      </div>



                      <div class="form-group col-sm-4">

                        <label for="email">E-mail</label>

                        <input class="form-control" id="email" name="email" type="email" placeholder="Exemplo: email@dominio.com.br">

                      </div>



                      <div class="form-group col-sm-3">

                        <label for="celular">Celular</label>

                        <input class="form-control" id="celular" name="celular" type="text" maxlength="15" placeholder="Digite o celular">

                      </div>



                      <!-- LINHA 2 -->



                      <div class="form-group col-sm-2">

                        <label for="cep">CEP</label>

                        <input class="form-control" name="cep" type="text" id="cep" value="" size="10" maxlength="9"

               onblur="pesquisacep(this.value);" placeholder="Digite o CEP" >

                      </div>



                      <div class="form-group col-sm-3">

                        <label for="rua">Endereço</label>

                        <input class="form-control" name="rua" type="text" id="rua" size="60" placeholder="Digite o endereço">

                      </div>



                      <div class="form-group col-sm-1">

                        <label for="numero">Número</label>

                        <input class="form-control" name="numero" id="numero" type="text">

                      </div>



                      <div class="form-group col-sm-1">

                        <label for="complemento">Compl.</label>

                        <input class="form-control" name="complemento" id="complemento" type="text">

                      </div>



                      

                      <div class="form-group col-sm-2">

                        <label for="bairro">Bairro</label>

                        <input class="form-control" name="bairro" type="text" id="bairro" size="40" placeholder="Digite o Bairro">

                      </div>



                      <div class="form-group col-sm-2">

                        <label for="cidade">Cidade</label>

                        <input class="form-control" name="cidade" type="text" id="cidade" size="40" placeholder="Digite a Cidade">

                      </div>



                      <div class="form-group col-sm-1">

                        <label for="uf">Estado</label>

                        <input class="form-control" name="uf" type="text" id="uf" size="2" placeholder="UF">

                      </div>



                      <!-- LINHA 3 -->

                      <div class="h3 col-sm-12 mb-1">

                      <span class="badge badge-lg navbar default-layout text-white text-uppercase mt-4 mb-2">Informações para Consulta</span>

                      </div>



                      <div class="form-group col-sm-2">

                        <label for="placa_veiculo">Placa</label>

                        <input class="form-control" id="placa_veiculo" type="text" name="placa_veiculo" maxlength="8" placeholder="AAA-0000">

                      </div>



                      <div class="form-group col-sm-3">

                        <label for="cor_veiculo">Cor do Veículo</label>

                        <input class="form-control" id="cor_veiculo" type="text" name="cor_veiculo" placeholder="Digite a Cor">

                      </div>



                      <div class="form-group col-sm-2">

                        <label for="marca_veiculo">Marca do Veículo</label>

                        <input class="form-control" id="marca_veiculo" type="text" name="marca_veiculo" placeholder="Digite a Marca">

                      </div>



                      <div class="form-group col-sm-3">

                        <label for="modelo_veiculo">Modelo do Veículo</label>

                        <input class="form-control" id="modelo_veiculo" type="text" name="modelo_veiculo" placeholder="Digite o Modelo do Veículo">

                      </div>



                      <div class="form-group col-sm-2">

                        <label for="ano_veiculo">Ano do Veículo</label>

                        <input class="form-control" id="ano_veiculo" type="int" name="ano_veiculo" maxlength="4" placeholder="Digite o Ano">

                      </div>



                      <!-- LINHA 4 -->

                      <div class="form-group col-sm-4">

                        <label for="equipamento">ID do Equipamento</label>

                        <input class="form-control" id="equipamento" type="text" name="equipamento" placeholder="Digite o ID do Equipamento">

                      </div>

                      <div class="form-group col-sm-4">

                        <label for="chip">Número do Chip</label>

                        <input class="form-control" id="chip" type="text" name="chip" placeholder="Digite o Número do Chip">

                      </div>



                      <div class="form-group col-sm-4">

                        <label for="empresa">Empresa</label>

                        <select class="form-control" id="empresa" type="text" name="empresa">

                          <option>Selecione a Empresa</option>

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

                          <input class="form-control" id="instalacao" name="instalacao" placeholder="DD/MM/AAAA" maxlength="12" type="text"/>

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

                          <input class="form-control" id="manutencao" name="manutencao" placeholder="DD/MM/AAAA" maxlength="12" type="text"/>

                         </div>

                       </div>

                       <div class="form-group col-sm-3">

                        <label for="central">Possui 0800</label>

                        <select class="form-control" id="central" type="text" name="central">

                          <option>Selecione a Opção</option>

                          <option>Sim</option>

                          <option>Não</option>

                        </select>

                      </div>

                      <div class="form-group col-sm-3">

                        <label for="local">Local do Equipamento</label>

                        <input class="form-control" id="local" type="text" name="local" placeholder="Local do Equipamento">

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

                          <input class="form-control" id="monitoramento" name="monitoramento" placeholder="00" type="text"/>

                          <div class="input-group-append bg-light border-primary">

                            <span class="input-group-text bg-transparent">

                              ,00

                            </span>

                          </div>

                         </div>

                       </div>



                       <div class="form-group col-sm-3">

                        <label for="usuario">Usuário</label>

                        <input class="form-control" id="usuario" type="text" name="usuario" placeholder="Usuário do Cliente">

                      </div>



                      <div class="form-group col-sm-3">

                        <label for="senha">Senha</label>

                        <input class="form-control" id="senha" type="text" name="senha" placeholder="Senha do Cliente">

                      </div>

                    

                      



                      <div class="form-group col-sm-3">

                        <label for="situacao">Situação</label>

                        <select class="form-control" id="situacao" type="text" name="situacao">

                          <option>Selecione a Situação</option>

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

                          <input class="form-control" id="vigencia" name="vigencia" placeholder="0" type="int"/>

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

                          <input class="form-control" id="inicio" name="inicio" placeholder="DD/MM/AAAA" maxlength="12" type="text"/>

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

                          <input class="form-control" id="vencimento" name="vencimento" placeholder="DD/MM/AAAA" maxlength="12" type="text"/>

                         </div>

                       </div>



                       <div class="form-group col-sm-3">

                        <label for="vendedor">Vendedor</label>

                        <input class="form-control" id="vendedor" type="text" name="vendedor" placeholder="Nome do Vendedor">

                      </div>



                      <!-- ÚLTIMA LINHA -->

                      <div class="form-group col-sm-12">

                        <label for="observacao">Observações</label>

                        <textarea class="form-control" id="observacao" type="textarea" name="observacao" rows="5"></textarea>

                      </div>







                    </div>



                    <div class="row">

                      <div class="form-group col-sm-12 mt-4 ">

                        <a class="btn btn-rounded btn-danger" style="cursor: pointer;" href="javascript:history.back()">Cancelar</a>

                      

                        <button class="btn btn-rounded btn-primary" type="submit" value="salvar">Cadastrar</button>

                      </div>

                    </div>



                    </form>

                    

                </div>

              </div>

          

        <!-- content-wrapper ends -->

        <?php include_once 'inc/footer.inc.php' ?>