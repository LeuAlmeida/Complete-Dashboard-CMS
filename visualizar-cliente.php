<?php

session_start();

include_once('config/verifica_login.php');

include_once('config/conexao.php');



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



<!DOCTYPE html>

<html lang="pt-br">



<head>

  <!-- Required meta tags -->

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Cliente #<?php echo $id ?> | Painel Administrativo Web ID</title>

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



<body class="content-wrapper">

<center>

      <!-- partial -->

      <div class="main-panel ">

        <div class="content-wrapper">



          <!-- Formulário de Cadastro -->

          <div class="col-sm-12">

                <div class="card">

                  <div class="card-header display-4">

                  <i class="fa fa-align-justify"></i><span class="text-uppercase"> Visualização do Cliente <?php echo $nome ?></span></div>

                  <div class="card-body">



                  



              <div class="col-sm-12">

                <div class="card">

                  <div class="card-body">



                    <form method="post" action="config/update-cliente.php">

                    <div class="row">

                      <!-- LINHA 1 -->

                      <div class="form-group col-sm-6">

                        <label for="nome">Nome</label>

                        <input readonly class="form-control" id="nome" name="nome" type="text" value="<?php echo $nome ?>">

                      </div>



                      <div class="form-group col-sm-6">

                        <label for="email">E-mail</label>

                        <input readonly class="form-control" id="email" name="email" type="email" value="<?php echo $email ?>">

                      </div>



                      <div class="form-group col-sm-4">

                        <label for="celular">Celular</label>

                        <input readonly class="form-control" id="celular" name="celular" type="text" maxlength="15" value="<?php echo $celular ?>">

                      </div>



                      <!-- LINHA 2 -->



                      <div class="form-group col-sm-2">

                        <label for="cep">CEP</label>

                        <input readonly class="form-control" name="cep" type="text" id="cep" value="<?php echo $cep ?>" size="10" maxlength="9">

                      </div>



                      <div class="form-group col-sm-6">

                        <label for="rua">Endereço</label>

                        <input readonly class="form-control" name="rua" type="text" id="rua" size="60" value="<?php echo $rua ?>">

                      </div>



                      <div class="form-group col-sm-1">

                        <label for="numero">Número</label>

                        <input readonly class="form-control" name="numero" id="numero" value="<?php echo $numero ?>" type="text">

                      </div>



                      <div class="form-group col-sm-2">

                        <label for="complemento">Complemento</label>

                        <input readonly class="form-control" name="complemento" value="<?php echo $complemento ?>" id="complemento" type="text">

                      </div>



                      

                      <div class="form-group col-sm-3">

                        <label for="bairro">Bairro</label>

                        <input readonly class="form-control" name="bairro" type="text" id="bairro" size="40" value="<?php echo $bairro ?>">

                      </div>



                      <div class="form-group col-sm-5">

                        <label for="cidade">Cidade</label>

                        <input readonly class="form-control" name="cidade" type="text" id="cidade" size="40" value="<?php echo $cidade ?>">

                      </div>



                      <div class="form-group col-sm-1">

                        <label for="uf">Estado</label>

                        <input readonly class="form-control" name="uf" type="text" id="uf" size="2" value="<?php echo $uf ?>">

                      </div>



                      <!-- LINHA 3 -->



                      <div class="form-group col-sm-3">

                        <label for="placa_veiculo">Placa</label>

                        <input readonly class="form-control" id="placa_veiculo" type="text" name="placa_veiculo" maxlength="8" value="<?php echo $placa_veiculo ?>">

                      </div>



                      <div class="form-group col-sm-3">

                        <label for="cor_veiculo">Cor do Veículo</label>

                        <input readonly class="form-control" id="cor_veiculo" type="text" name="cor_veiculo" value="<?php echo $cor_veiculo ?>">

                      </div>



                      <div class="form-group col-sm-2">

                        <label for="marca_veiculo">Marca do Veículo</label>

                        <input readonly class="form-control" id="marca_veiculo" type="text" name="marca_veiculo" value="<?php echo $marca_veiculo ?>">

                      </div>



                      <div class="form-group col-sm-4">

                        <label for="modelo_veiculo">Modelo do Veículo</label>

                        <input readonly class="form-control" id="modelo_veiculo" type="text" name="modelo_veiculo" value="<?php echo $modelo_veiculo ?>">

                      </div>



                      <div class="form-group col-sm-3">

                        <label for="ano_veiculo">Ano do Veículo</label>

                        <input readonly class="form-control" id="ano_veiculo" type="int" name="ano_veiculo" maxlength="4" value="<?php echo $ano_veiculo ?>">

                      </div>



                      <!-- LINHA 4 -->

                      <div class="form-group col-sm-3">

                        <label for="equipamento">ID do Equipamento</label>

                        <input readonly class="form-control" id="equipamento" type="text" name="equipamento" value="<?php echo $equipamento ?>">

                      </div>

                      <div class="form-group col-sm-3">

                        <label for="chip">Número do Chip</label>

                        <input readonly class="form-control" id="chip" type="text" name="chip" value="<?php echo $chip ?>">

                      </div>



                      <div class="form-group col-sm-3">

                        <label for="empresa">Empresa</label>

                        <input readonly class="form-control" id="empresa" type="text" name="empresa" value="<?php echo $empresa ?>">

                      </div>



                       <div class="form-group col-sm-3">

                        <label for="instalacao">Data de Instalação</label>

                         <div class="input-group">

                          <div class="input-group-prepend bg-dark border-primary">

                            <span class="input-group-text">

                              <i class="fas fa-calendar-alt bg-transparent text-white"></i>

                            </span>

                          </div>

                          <input readonly class="form-control" id="instalacao" name="instalacao" value="<?php echo $instalacao ?>" maxlength="12" type="text"/>

                         </div>

                       </div>



                       <div class="form-group col-sm-3">

                        <label for="manutencao">Última manutenção</label>

                         <div class="input-group">

                          <div class="input-group-prepend bg-dark border-primary">

                            <span class="input-group-text">

                              <i class="fas fa-calendar-alt bg-transparent text-white"></i>

                            </span>

                          </div>

                          <input readonly class="form-control" id="manutencao" name="manutencao" value="<?php echo $manutencao ?>" maxlength="12" type="text"/>

                         </div>

                       </div>



                       <!-- LINHA 5 -->

                       <div class="form-group col-sm-3">

                        <label for="monitoramento">Valor do Monitoramento</label>

                         <div class="input-group">

                          <div class="input-group-prepend bg-dark border-primary">

                            <span class="input-group-text bg-transparent text-white">

                              R$

                            </span>

                          </div>

                          <input readonly class="form-control" id="monitoramento" name="monitoramento" value="<?php echo $monitoramento ?>" type="text"/>

                          <div class="input-group-append bg-dark border-primary">

                            <span class="input-group-text bg-transparent text-white">

                              ,00

                            </span>

                          </div>

                         </div>

                       </div>



                       <div class="form-group col-sm-3">

                        <label for="central">Possui 0800?</label>

                        <input readonly class="form-control" id="central" type="text" name="central" value="<?php echo $central ?>">

                      </div>



                      <div class="form-group col-sm-3">

                        <label for="usuario">Usuário</label>

                        <input readonly class="form-control" id="usuario" type="text" name="usuario" value="<?php echo $usuario ?>">

                      </div>



                      <div class="form-group col-sm-3">

                        <label for="senha">Senha</label>

                        <input readonly class="form-control" id="senha" type="text" name="senha" value="<?php echo $senha ?>">

                      </div>

                    

                      



                      <div class="form-group col-sm-3">

                        <label for="situacao">Situação</label>

                        <input readonly class="form-control" id="situacao" type="text" name="situacao" value="<?php echo $situacao ?>">

                      </div>

                      <div class="form-group col-sm-3">

                        <label for="local">Local do Equipamento</label>

                        <input readonly class="form-control" id="local" type="text" name="local" value="<?php echo $local ?>">

                      </div>

                      <!-- LINHA 6 -->

                      <div class="form-group col-sm-4">

                        <label for="vigencia">Vigência</label>

                         <div class="input-group">

                          <input readonly class="form-control" id="vigencia" name="vigencia" value="<?php echo $vigencia ?>" type="int"/>

                          <div class="input-group-append bg-dark border-primary">

                            <span class="input-group-text bg-transparent text-white">

                              Meses

                            </span>

                          </div>

                         </div>

                       </div>



                       



                      <div class="form-group col-sm-4">

                        <label for="inicio">Início do Contrato</label>

                         <div class="input-group">

                          <div class="input-group-prepend bg-dark border-primary">

                            <span class="input-group-text">

                              <i class="fas fa-calendar-alt bg-transparent text-white"></i>

                            </span>

                          </div>

                          <input readonly class="form-control" id="inicio" name="inicio" value="<?php echo $inicio ?>" maxlength="12" type="text"/>

                         </div>

                       </div>



                       <div class="form-group col-sm-4">

                        <label for="vencimento">Vencimento do Contrato</label>

                         <div class="input-group">

                          <div class="input-group-prepend bg-dark border-primary">

                            <span class="input-group-text">

                              <i class="fas fa-calendar-alt bg-transparent text-white"></i>

                            </span>

                          </div>

                          <input readonly class="form-control" id="vencimento" name="vencimento" value="<?php echo $vencimento ?>" maxlength="12" type="text"/>

                         </div>

                       </div>



                       <div class="form-group col-sm-12">

                        <label for="vendedor">Vendedor</label>

                        <input readonly class="form-control" id="vendedor" type="text" name="vendedor" value="<?php echo $vendedor ?>">

                      </div>



                      <!-- ÚLTIMA LINHA -->

                      <div class="form-group col-sm-12">

                        <label for="observacao">Observações</label>

                        <textarea readonly class="form-control" id="observacao" type="textarea" name="observacao" rows="5"><?php echo $observacao ?></textarea>

                      </div>







                    </div>



                    <div class="row">

                      <div class="form-group col-sm-12 mt-4 ">

                        <a class="btn btn-danger btn-rounded" style="cursor: pointer;" href="javascript:Fechar()">Fechar</a>

                      

                        <button class="btn btn-primary btn-rounded" type="button" name="imprimir" value="Imprimir" onclick="window.print();">Imprimir <i class="fas fa-print"></i></button>

                      </div>

                    </div>



                    </form>

                    

                </div>

              </div>

            </div>

          </div>

        </div>



              <a href="https://webid.net.br" target="_blank" class="text-white"><div class="container-fluid mt-4 btn btn-block btn-rounded btn-dark">Desenvolvido por Web ID.net.br</div></a>

        <!-- content-wrapper ends -->

 <!-- plugins:js -->

  <script src="vendors/js/vendor.bundle.base.js"></script>

    <script src="js/config.js"></script>

  <script src="vendors/js/vendor.bundle.addons.js"></script>

  <!-- endinject -->

  <!-- Plugin js for this page-->

  <!-- End plugin js for this page-->

  <!-- inject:js -->

  <script src="js/off-canvas.js"></script>

  <script src="js/misc.js"></script>

  <!-- endinject -->

  <!-- Custom js for this page-->

  <script src="js/dashboard.js"></script>

  <!-- End custom js for this page-->

  <!-- Include Date Range Picker -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>



<script>

  



function Fechar()

{

window.close();

}





</script>

</center>

</body>



</html>