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
  <title>Cadastrar Instalador | Painel Administrativo Web ID</title>
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
                    <i class="fa fa-align-justify"></i> Cadastro de Instalador</div>
                  <div class="card-body">

              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body">

                    <form method="post" action="config/processa-instalador.php">
                    <div class="row">
                      <!-- LINHA 1 -->
                      <div class="h3 col-sm-12 mb-1">
                      <span class="badge badge-lg navbar default-layout text-white text-uppercase mb-2">Informações Pessoais</span>
                      </div>
                      <div class="form-group col-sm-4">
                        <label for="nome">Nome</label>
                        <input class="form-control" id="nome" name="nome" type="text" placeholder="Nome Completo do Instalador">
                      </div>

                      

                      <div class="form-group col-sm-4">
                        <label for="email">E-mail</label>
                        <input class="form-control" id="email" name="email" type="text" placeholder="Exemplo: email@dominio.com.br">
                      </div>

                      <div class="form-group col-sm-4">
                        <label for="contato">Nome para Contato</label>
                        <input class="form-control" id="contato" type="text" name="contato" placeholder="Apelido ou Nome para Contato">
                      </div>

                      <div class="form-group col-sm-4">
                        <label for="fantasia">Nome Fantasia</label>
                        <input class="form-control" id="fantasia" type="text" name="fantasia" placeholder="Digite o Nome Fantasia">
                      </div>

                      <div class="form-group col-sm-4">
                        <label for="celular">Celular</label>
                        <input class="form-control" id="celular" name="celular" type="text" maxlength="15" placeholder="Digite o celular">
                      </div>

                      <div class="form-group col-sm-4">
                        <label for="rg">RG</label>
                        <input class="form-control" id="rg" type="text" name="rg" placeholder="Digite o RG">
                      </div>

                      <div class="form-group col-sm-4">
                        <label for="identidade">CPF / CNPJ</label>
                        <input class="form-control" id="identidade" type="text" name="identidade" maxlength="4" placeholder="Digite o Número">
                      </div>

                      <!-- LINHA 2 -->

                      <div class="form-group col-sm-4">
                        <label for="nascimento">Data de Nascimento</label>
                        <div class="input-group">
                          <div class="input-group-prepend bg-light border-primary">
                            <span class="input-group-text">
                              <i class="fas fa-calendar-alt bg-transparent"></i>
                            </span>
                          </div>
                          <input class="form-control" id="nascimento" name="nascimento" placeholder="DD/MM/AAAA" maxlength="12" type="text"/>
                         </div>
                      </div>

                      <div class="form-group col-sm-4">
                        <label for="cep">CEP</label>
                        <input class="form-control" name="cep" type="text" id="cep" value="" size="10" maxlength="9"
               onblur="pesquisacep(this.value);" placeholder="Digite o CEP" >
                      </div>

                      <div class="form-group col-sm-4">
                        <label for="rua">Endereço</label>
                        <input class="form-control" name="rua" type="text" id="rua" size="60" placeholder="Digite o endereço">
                      </div>

                      <div class="form-group col-sm-1">
                        <label for="numero">Número</label>
                        <input class="form-control" name="numero" id="numero" type="text">
                      </div>

                      <div class="form-group col-sm-2">
                        <label for="complemento">Complemento</label>
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

                      

                      

                      <div class="form-group col-sm-4">
                        <label for="pagamento">Forma de Pagamento</label>
                        <input class="form-control" id="pagamento" type="text" name="pagamento" placeholder="Digite a Forma de Pagamento">
                      </div>

                      <!-- LINHA 4 -->
                      

                      <div class="form-group col-sm-4">
                        <label for="pf">Pessoa Física</label>
                        <select class="form-control" id="pf" type="text" name="pf">
                          <option>Selecione uma opção</option>
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
                          <input class="form-control" id="admissao" name="admissao" placeholder="DD/MM/AAAA" maxlength="12" type="text"/>
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
                          <input class="form-control" id="demissao" name="demissao" placeholder="DD/MM/AAAA" maxlength="12" type="text"/>
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
                          <input class="form-control" id="salario" name="salario" placeholder="00" type="text"/>
                          <div class="input-group-append bg-light border-primary">
                            <span class="input-group-text bg-transparent">
                              ,00
                            </span>
                          </div>
                         </div>
                       </div>

                       <div class="form-group col-sm-4">
                        <label for="instalador">Instalador Bloqueado</label>
                        <select class="form-control" id="instalador" type="text" name="instalador">
                          <option>Selecione uma opção</option>
                          <option>Sim</option>
                          <option>Não</option>
                        </select>
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