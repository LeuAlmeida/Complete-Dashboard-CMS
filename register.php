<?php
session_start();
include_once 'config/verifica_login.php';
include_once 'config/conexao.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cadastro de Acesso | Painel Administrativo Web ID</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-sm-12">
            <center>
              <img src="images/logo-cinza.png" width="350px" class="img-responsive pb-4" />
            </center>
          </div>
          <div class="col-lg-4 mx-auto">
            <h2 class="text-center mb-4">Registro de Usuário</h2>
            <div class="auto-form-wrapper">
              <form method="post" action="config/processa-acesso.php">
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuário" required="">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                

                <div class="form-group">
                  <button class="btn btn-warning submit-btn btn-block">Registrar</button>
                </div>
                
                <div class="form-group">
                  <a style="cursor: pointer;" href="javascript:goBack()" class="btn btn-outline-secondary btn-sm btn-block">Voltar</a>
                </div>
                
                <div class="text-block text-center my-3">
                  <span class="text-small font-weight-semibold">Já possui uma conta?</span>
                  <a href="index.php" class="text-black text-small">Fazer login</a>.
                </div>
              </form>
            </div>
            <p class="footer-text text-center mt-3">
              <a href="https://webid.net.br" class="badge badge-warning" target="_blank">
              Desenvolvido por Web ID
              </a>
            </p>

          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->


  <script>
    function goBack() {
      window.history.back();
    }
  </script>

</body>

</html>