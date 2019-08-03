<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login | Painel Administrativo Web ID</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-sm-12">
            <center>
            <img src="images/logo-branca.png" width="350px" class="img-responsive pb-4" />
          </center>
          </div>

          <div class="col-lg-5 mx-auto">
            <h2 class="text-center text-white mb-4">Login de Usuário</h2>
            <?php

            if(isset($_SESSION['nao_autenticado'])):
            ?>
            <div class="col-sm-12"><div class="alert alert-danger alert-dismissible fade show" role="alert">Usuário ou senha inválido(s).<button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button></div></div>
            <?php
            endif;
            unset($_SESSION['nao_autenticado']);
            ?>


            <div class="auto-form-wrapper">
              <form action="login.php" method="post">
                <div class="form-group">


                  <label class="label">Usuário</label>
                  <div class="input-group" >
                    <input name="usuario" id="usuario" type="text" class="form-control" placeholder="Digite o usuário">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="fas fa-user"></i>
                      </span>
                    </div>
                  </div>


                </div>
                <div class="form-group">
                  <label class="label">Senha</label>
                  <div class="input-group">
                    <input type="password" name="senha" id="senha" class="form-control" placeholder="Digite a senha">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="fas fa-fingerprint"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-warning submit-btn btn-block" type="submit">Entrar</button>
                </div>
                <div class="text-block text-center my-3">
                  <span class="text-small ">Deseja criar um novo usuário como administrador?</span>
                  <a href="register.php" class="text-black text-small font-weight-semibold">Clique aqui</a>.
                  <br />
                  <span class="text-small font-weight-semibold"><a href="mailto:nilton@sistemasinsat.com.br?subject=Solicitação de Acesso | Painel Administrativo Web ID&cc=leo@webid.net.br" class="text-black text-small">Solicite um acesso ao responsável.</a></span>
                </div>
                
                
              </form>
            </div>
            <ul class="auth-footer">
              <li>
                <a href="https://sistemasinsat.com.br">Sistemas Insat</a>
              </li>
              <li>
                <a href="https://insatprotege.com.br">Insat Protege</a>
              </li>
              <li>
                <a href="https://rastreadoresinsta.com">Rastreadores Insat</a>
              </li>
            </ul>
            <p class="footer-text text-center">Copyright © 2019 Todos direitos reservados.</p>
            <p class="footer-text text-center">
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
</body>

</html>