<?php
session_start();
include_once('config/verifica_login.php');
include_once 'config/conexao.php';

// Definir o número de itens por página
  $itens_por_pagina = 10;

// Definir a página atual
  @$pagina = intval($_GET['pagina']);


  $item = $pagina * $itens_por_pagina;


// Puxar os clientes do Banco de Dados
  $sql_code = "select * from clientes LIMIT $item, $itens_por_pagina";
  $execute = $conexao->query($sql_code) or die ($conexao->error);

  $id = $execute->fetch_assoc();
  $nome = $execute->fetch_assoc();
  $equipamento = $execute->fetch_assoc();
  $placa_veiculo = $execute->fetch_assoc();
  $situacao = $execute->fetch_assoc();


  $num = $execute->num_rows;

// Pega a quantidade total do Banco de Dados
  $num_total = $conexao->query("select * from clientes")->num_rows;

// Definir o número de páginas
  $num_paginas = ceil($num_total/$itens_por_pagina);



  
// $querySelect = $conexao->query("select * from clientes LIMIT $pagina, $itens_por_pagina");



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
                    <i class="fa fa-align-justify"></i> Listagem de Clientes</div>
                  <div class="card-body">
                    <a class="btn navbar default-layout text-white d-block text-uppercase" data-toggle="collapse" href="#filtroCollapse" role="button" aria-expanded="false" aria-controls="filtroCollapse">
                      Filtro de clientes <i class="fas fa-search"></i>
                    </a>
                    <div class="collapse" id="filtroCollapse">
                    <div class="card card-body bg-secondary">
                      <form method="get" action="#">
                    <div class="row">
                       <div class="form-group col-sm-3">
                        <label for="nome">Nome</label>
                        <input class="form-control" id="nome" type="text" name="nome" placeholder="Nome do Cliente">
                      </div>

                      <div class="form-group col-sm-3">
                        <label for="equipamento">ID do Equipamento</label>
                        <input class="form-control" id="equipamento" type="text" name="equipamento" placeholder="ID do Equipamento">
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

                      <div class="form-group col-sm-3">
                        <label for="placa_veiculo">Placa</label>
                        <input class="form-control" id="placa_veiculo" type="text" name="placa_veiculo" maxlength="8" placeholder="AAA-0000">
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group d-flex justify-content-between col-sm-12">
                        <a class="btn btn-danger" data-toggle="collapse" href="#filtroCollapse" role="button" aria-expanded="true" aria-controls="filtroCollapse">Cancelar</a>
                      
                        <button class="btn btn-primary" type="submit" value="salvar">Buscar</button>
                      </div>
                    </div>

                    </form>
                    </div>
                  </div>




              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body">
                    <?php if ($num > 0){ ?>
                    <table class="table table-hover">
                      <thead class="thead bg-secondary">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nome</th>
                          <th scope="col">ID do Equipamento</th>
                          <th scope="col">Placa do Veículo</th>
                          <th scope="col">Situação</th>
                          <th scope="col">Ação</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php

                        while($registros = $execute->fetch_assoc()):
                          $id = $registros['id'];
                          $nome = $registros['nome'];
                          $equipamento = $registros['equipamento'];
                          $placa_veiculo = $registros['placa_veiculo'];
                          $situacao = $registros['situacao'];

                          echo "<tbody><tr><th scope='row'>";

                          echo $id;

                          echo "</th>";
                          echo "<td>";

                          echo $nome;

                          echo "</td>";
                          echo "<td>";

                          echo $equipamento;

                          echo "</td>";
                          echo "<td>";

                          echo $placa_veiculo;

                          echo "</td>";
                          echo "<td>";

                          echo $situacao;

                          echo "</td>";
                          echo "<td>";
                          echo "<a href='editar-cliente.php?id=$id' data-toggle='tooltip' data-placement='left' title='Editar'><i class='fas fa-edit'></i></a>
                            <a href='config/deletar-cliente.php?id=$id' onclick='return checkDelete()'' data-toggle='tooltip' data-placement='top' title='Excluir'><i class='fas fa-trash-alt'></i></a>
                            <a href='visualizar-cliente.php?id=$id' data-toggle='tooltip' data-placement='right' title='Visualizar'><i class='fas fa-eye'></i></a>";
                          echo "</td>";

                          echo "</tr>";

                        endwhile;

                        ?>
                        

                      </tbody>
                    </table>

                    <nav aria-label="Page navigation example">
                      <ul class="pagination justify-content-center">
                        <?php
                          if($pagina == 0){
                              $disabled = "disabled";
                            }else{
                              $disabled = "";
                            }
                        ?>
                        <li class="page-item <?php echo $disabled; ?>">
                          <a class="page-link" href="listar-clientes-2.php?pagina=<?php echo $_GET['pagina']-1 ?>" tabindex="-1">Anterior</a>
                        </li>

                        <?php for($i=0;$i<$num_paginas;$i++){
                          $estilo = "";
                          if($pagina == $i){
                              $estilo = "active";
                          }
                        ?>
                        <li class="page-item <?php echo $estilo; ?>"><a class="page-link" href="listar-clientes-2.php?pagina=<?php echo $i; ?> "><?php echo $i+1; ?></a></li>
                        <?php } ?>

                          <a class="page-link" href="listar-clientes-2.php?pagina=<?php echo $_GET['pagina']+10 ?>">Próximo</a>
                        </li>
                      </ul>
                    </nav>

                    <?php }?>
                  </div>
            </div>

                    

              
          
        <!-- content-wrapper ends -->



        <?php include_once 'inc/footer.inc.php' ?>