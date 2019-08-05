<?php
   session_start();
   
   include_once('config/verifica_login.php');
   
   @include_once 'config/conexao.php';
   include_once 'config/filtro-clientes.php';
   
   
   if (isset($_GET['pg'])) {
       $pg = $_GET['pg'];
   } else {
       $pg = 1;
   }
   
   $no_of_records_per_page = 20;
   $offset = ($pg-1) * $no_of_records_per_page; 
   $total_pages_sql = "SELECT COUNT(*) FROM clientes";
   $result = mysqli_query($conexao,$total_pages_sql);
   
   @$total_rows = mysqli_fetch_array($result)[0];
   
   $total_pages = ceil($total_rows / $no_of_records_per_page);
   
   $filtro_nome = isset($_GET['nome']) ? $_GET['nome'] : NULL;
   $filtro_equipamento = isset($_GET['equipamento']) ? $_GET['equipamento'] : NULL;
   $filtro_situacao = isset($_GET['situacao']) ? $_GET['situacao'] : NULL;
   $filtro_placa = isset($_GET['placa']) ? $_GET['placa'] : NULL;
   
   $sqlQuery =  "SELECT * FROM clientes";
   $filter = '';
   
   function filter($queryFilter, $inputName, $fieldName, $filterName) {
     if(!is_null($filterName)){
       $queryFilter .= $queryFilter == '' ? " WHERE $fieldName LIKE "."'"."%".$filterName."%"."'" : " AND $fieldName LIKE "."'"."%".$filterName."%"."'";
     }
     return $queryFilter;
   
   }
   
   $filter = filter($filter, 'nome', 'nome', $filtro_nome);
   $filter = filter($filter, 'equipamento', 'equipamento', $filtro_equipamento);
   $filter = filter($filter, 'situacao', 'situacao', $filtro_situacao);
   $filter = filter($filter, 'placa', 'placa_veiculo', $filtro_placa);
   
   $sqlQuery .= $filter." LIMIT $offset, $no_of_records_per_page";
   
   $querySelect = $conexao->query($sqlQuery);
   
   ?>
<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Listar Clientes | Painel Administrativo Web ID</title>
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
      <style type="text/css">
         .dtHorizontalExampleWrapper {
         max-width: 600px;
         margin: 0 auto;
         }
         #dtHorizontalExample th, td {
         white-space: nowrap;
         }
         table.dataTable thead .sorting:after,
         table.dataTable thead .sorting:before,
         table.dataTable thead .sorting_asc:after,
         table.dataTable thead .sorting_asc:before,
         table.dataTable thead .sorting_asc_disabled:after,
         table.dataTable thead .sorting_asc_disabled:before,
         table.dataTable thead .sorting_desc:after,
         table.dataTable thead .sorting_desc:before,
         table.dataTable thead .sorting_desc_disabled:after,
         table.dataTable thead .sorting_desc_disabled:before {
         bottom: .5em;
         }
         .page-link{
         color:#ffffff ;
         }
         .page-link:hover{
         color:#c7c7c7 ;
         }
         .disabled{
         color: #9a9a9a !important;
         }
         .content-wrapper {
         padding: 0rem;
         }
      </style>
   </head>
   <body>
      <?php @include_once 'inc/header.inc.php' ?>
      <!-- partial -->
      <div class="main-panel">
      <div class="content-wrapper">
      <!-- Formulário de Cadastro -->
      <div class="col-sm-12">
      <div class="card">
      <div class="card-header display-4">
         <i class="fa fa-align-justify"></i> Listagem de Clientes
      </div>
      <a class="btn btn-rounded navbar default-layout text-white d-block text-uppercase" data-toggle="collapse" href="#filtroCollapse" role="button" aria-expanded="false" aria-controls="filtroCollapse">
      Filtro de clientes <i class="fas fa-search"></i>
      </a>
      <div class="collapse" id="filtroCollapse">
         <div class="card card-body bg-secondary">
            <form method="get" action="#">
               <div class="row">
                  <div class="form-group col-sm-3">
                     <label for="filtro">Nome</label>
                     <input class="form-control" id="filtro_nome" type="text" name="nome" placeholder="Nome do Cliente" <?php value_input('nome'); ?>>
                  </div>
                  <div class="form-group col-sm-3">
                     <label for="fequipamento">ID do Equipamento</label>
                     <input class="form-control" id="filtro_equipamento" type="text" name="equipamento" placeholder="Número do ID" <?php value_input('equipamento'); ?>>
                  </div>
                  <div class="form-group col-sm-3">
                     <label for="filtro_situacao">Situação</label>
                     <select class="form-control" id="filtro_situacao" type="text" name="situacao">
                        <option value="">Selecione a Situação</option>
                        <option value="<?php value_option('situacao', 'ATIVO'); ?>">Ativo</option>
                        <option value="<?php value_option('situacao', 'Suspenso'); ?>">Suspenso</option>
                        <option value="<?php value_option('situacao', 'Cancelado/Retirado'); ?>">Cancelado/Retirado</option>
                        <option value="<?php value_option('situacao', 'Funcionário'); ?>">Funcionário</option>
                        <option value="<?php value_option('situacao', 'Sem Mensalidade'); ?>">Sem mensalidade</option>
                     </select>
                  </div>
                  <div class="form-group col-sm-3">
                     <label for="fplaca">Placa</label>
                     <input class="form-control" id="filtro_placa" type="text" name="placa" maxlength="8" placeholder="AAA-0000" <?php value_input('placa');?>>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group d-flex justify-content-between col-sm-12">
                     <div>
                        <a class="btn btn-rounded btn-danger" data-toggle="collapse" href="#filtroCollapse" role="button" aria-expanded="true" aria-controls="filtroCollapse">Cancelar</a>
                        <?php if(count($_GET)) { ?>
                        <a class="btn btn-rounded btn-dark" onclick="window.location = window.location.href.split('?')[0];"><span class="text-white">Limpar</span></a>
                        <?php } ?>
                     </div>
                     <div>
                        <button class="btn btn-rounded btn-primary" type="submit" value="salvar">Buscar</button>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <div class="col-sm-12">
         <div class="card">
            <div class="card-body">
               <div class="table-responsive-sm">
                  <table id="dtHorizontalExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
                     <thead class="thead-dark">
                        <tr>
                           <th scope="col">Nome</th>
                           <th scope="col">ID do Equipamento</th>
                           <th scope="col">Placa</th>
                           <th scope="col">Situação</th>
                           <th scope="col">Ação</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                           while($registros = $querySelect->fetch_assoc()):
                           
                             $id = $registros['id'];
                           
                             $nome = $registros['nome'];
                           
                             $equipamento = $registros['equipamento'];
                           
                             $placa_veiculo = $registros['placa_veiculo'];
                           
                             $situacao = $registros['situacao'];
                           
                           
                           
                             echo "<tr>" . "<td><span class='badge badge-dark'>$id</span> <a href='editar-cliente.php?id=$id' data-toggle='tooltip' data-placement='top' title='$nome' >" . mb_substr("$nome", 0, 10, 'UTF-8') . "..." . "</a></td>";
                           
                             echo "<td>" . $equipamento . "</td>";
                           
                             echo "<td>" . $placa_veiculo . "</td>";
                           
                             echo "<td>" . $situacao . "</td>";
                           
                           
                           
                             echo "<td><center>" . "<a href='editar-cliente.php?id=$id' data-toggle='tooltip' data-placement='left' title='Editar' class='btn btn-icons btn-rounded btn-primary'><i class='fas fa-edit' style='margin-top:2px;'></i></a>
                           
                           
                           
                               <a href='config/deletar-cliente.php?id=$id' onclick='return checkDelete()' class='btn btn-icons btn-rounded btn-danger' data-toggle='tooltip' data-placement='top' title='Excluir'><i class='fas fa-trash-alt' style='margin-top:2px;'></i></a>
                           
                           
                           
                               <a href='visualizar-cliente.php?id=$id' target='_blank' class='btn btn-icons btn-rounded btn-info' data-toggle='tooltip' data-placement='right' title='Visualizar'><i class='fas fa-eye' style='margin-top:2px;'></i></a>" . "</center></td>" ;
                           
                           
                           
                               echo "</tr>";
                           
                           endwhile;
                           
                           
                           
                           
                           
                           
                           
                           ?>
                     </tbody>
                  </table>
               </div>
               <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-center mt-4">
                     <li class="page-item <?php if($pg <= 1){ echo 'disabled'; } ?>" style="width: 50%;text-align: center;">
                        <a class="page-link" href="<?php if($pg <= 1){ echo '#'; } else { echo "?pg=".($pg - 1); } ?>" style="background: #212529;/*color: #ffaf00;" tabindex="-1">Anterior</a>
                     </li>
                     <!--
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        
                        
                        
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        
                        
                        
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        
                        -->
                     <li class="page-item <?php if($pg >= $total_pages){ echo 'disabled'; } ?>" style="width: 50%;text-align: center;">
                        <a class="page-link" href="<?php if($pg >= $total_pages){ echo '#'; } else { echo "?pg=".($pg + 1); } ?>" style="background: #212529;/*color: #ffaf00;">Próximo</a>
                     </li>
                  </ul>
               </nav>
            </div>
         </div>
      </div>
      <!-- content-wrapper ends -->
      <script>
         $(document).ready(function () {
         
         $('#dtHorizontalExample').DataTable({
         
           "scrollX": true
         
         });
         
         $('.dataTables_length').addClass('bs-select');
         
         });
         
      </script>
      <?php include_once 'inc/footer.inc.php' ?>