<?php
session_start();
include_once('config/verifica_login.php');
include_once 'config/conexao.php';

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";


$querySelect = $conexao->query("select * from funcionarios where nome like '%$filtro%' ");



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Listar Funcionários | Painel Administrativo Web ID</title>
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

  

<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Deseja mesmo excluir este registro?');
}
</script>
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
                    <i class="fa fa-align-justify"></i> Listagem de Funcionário</div>
                  <div class="card-body">
                    <a class="btn btn-rounded navbar default-layout text-white d-block text-uppercase" data-toggle="collapse" href="#filtroCollapse" role="button" aria-expanded="false" aria-controls="filtroCollapse">
                      Filtro de Funcionários <i class="fas fa-search"></i>
                    </a>
                    <div class="collapse" id="filtroCollapse">
                    <div class="card card-body bg-secondary">
                      <form method="get" action="#">
                    <div class="row">
                       <div class="form-group col-sm-12">
                        <label for="filtro">Nome</label>
                        <input class="form-control" id="filtro" type="text" name="filtro" placeholder="Nome do Funcionário">
                      </div>
                      <!--
                      <div class="form-group col-sm-3">
                        <label for="filtro_equipamento">ID do Equipamento</label>
                        <input class="form-control" id="filtro_equipamento" type="text" name="filtro_equipamento" placeholder="ID do Equipamento">
                      </div>
                    
                      <div class="form-group col-sm-3">
                        <label for="filtro_situacao">Situação</label>
                        <select class="form-control" id="filtro_situacao" type="text" name="filtro_situacao">
                          <option>Selecione a Situação</option>
                          <option>Ativo</option>
                          <option>Suspenso</option>
                          <option>Cancelado</option>
                          <option>Funcionário</option>
                          <option>Retirado</option>
                          <option>Sem mensalidade</option>
                        </select>
                      </div>
                    

                      <div class="form-group col-sm-3">
                        <label for="filtro_placa_veiculo">Placa</label>
                        <input class="form-control" id="filtro_placa_veiculo" type="text" name="filtro_placa_veiculo" maxlength="8" placeholder="AAA-0000">
                      </div>
                      -->
                    </div>

                    <div class="row">
                      <div class="form-group d-flex justify-content-between col-sm-12">
                        <a class="btn btn-rounded btn-danger" data-toggle="collapse" href="#filtroCollapse" role="button" aria-expanded="true" aria-controls="filtroCollapse">Cancelar</a>
                      
                        <button class="btn btn-rounded btn-primary" type="submit" value="salvar">Buscar</button>
                      </div>
                    </div>

                    </form>
                    </div>
                  </div>




              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body">

                    <table class="table table-hover">
                      <thead class="thead bg-secondary">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nome</th>
                          <th scope="col">Função</th>
                          <th scope="col">Bloqueado</th>
                          <th scope="col">Celular</th>
                          <th scope="col">Ação</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php

                        while($registros = $querySelect->fetch_assoc()):
                          $id = $registros['id'];
                          $nome = $registros['nome'];
                          $funcao = $registros['funcao'];
                          $funcionario = $registros['funcionario'];
                          $celular = $registros['celular'];

                          echo "<tbody><tr><th scope='row'>" . $id . "</th>";
                          echo "<td>" . $nome . "</td>";
                          echo "<td>" . $funcao . "</td>";
                          echo "<td>" . $funcionario . "</td>";
                          echo "<td>" . $celular . "</td>";
                          echo "<td>" . "<center>" . "<a href='editar-funcionario.php?id=$id' data-toggle='tooltip' data-placement='left' title='Editar' class='btn btn-icons btn-rounded btn-primary'><i class='fas fa-edit' style='margin-top:2px;'></i></a> 
                            <a href='config/deletar-funcionario.php?id=$id' onclick='return checkDelete()' class='btn btn-icons btn-rounded btn-danger' data-toggle='tooltip' data-placement='top' title='Excluir'><i class='fas fa-trash-alt' style='margin-top:2px;'></i></a>" . "</center>" . "</td>" . "</tr>";
                            
                        endwhile;

                        ?>
                        
                      </tbody>
                    </table>
                  </div>
            </div>
                <!-- PAGINAÇÃO BOOTSTRAP
                    <nav aria-label="Page navigation example">
                      <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1">Anterior</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">Próximo</a>
                        </li>
                      </ul>
                    </nav>
                -->
              
          
        <!-- content-wrapper ends -->



        <?php include_once 'inc/footer.inc.php' ?>