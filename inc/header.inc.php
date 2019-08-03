<div class="container-scroller">

    <!-- partial:partials/_navbar.html -->

    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">

      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">

        <a class="navbar-brand brand-logo" href="painel.php">

          <img src="images/logo.png?a" alt="logo" />

        </a>

        <a class="navbar-brand brand-logo-mini" href="painel.php">

          <img src="images/icone-20x28.jpg" width="115px" height="auto" alt="logo" />

        </a>

      </div>

      <div class="navbar-menu-wrapper d-flex align-items-center">

        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">

          <li class="nav-item">

            <a href="#" class="nav-link"><i class="fas fa-share-square"></i>Propostas

              <span class="badge badge-warning ml-1">Em breve</span>

            </a>

          </li>

          <li class="nav-item active">

            <a href="mailto:leo@webid.net.br?subject=Reportar Erro | Painel Administrativo Web ID" style="white-space: nowrap;" class="nav-link">

              <i class="fas fa-bug"></i>Reportar Problema</a>

          </li>

          <li class="nav-item">

            <a href="#" class="nav-link">

              <i class="fas fa-file-alt"></i>Contratos

              <span class="badge badge-warning ml-1">Em breve</span>

            </a>

          </li>

        </ul>

        <ul class="navbar-nav navbar-nav-right">

          <!-- 

          <li class="nav-item dropdown">

            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">

              <i class="mdi mdi-file-document-box"></i>

              <span class="count">7</span>

            </a>

            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">

              <div class="dropdown-item">

                <p class="mb-0 font-weight-normal float-left">You have 7 unread mails

                </p>

                <span class="badge badge-info badge-pill float-right">View all</span>

              </div>

              <div class="dropdown-divider"></div>

              <a class="dropdown-item preview-item">

                <div class="preview-thumbnail">

                  <i class="fas fa-satellite-dish"></i>

                </div>

                <div class="preview-item-content flex-grow">

                  <h6 class="preview-subject ellipsis font-weight-medium text-dark">David Grey

                    <span class="float-right font-weight-light small-text">1 Minutes ago</span>

                  </h6>

                  <p class="font-weight-light small-text">

                    The meeting is cancelled

                  </p>

                </div>

              </a>

              <div class="dropdown-divider"></div>

              <a class="dropdown-item preview-item">

                <div class="preview-thumbnail">

                  <img src="images/faces/face2.jpg" alt="image" class="profile-pic">

                </div>

                <div class="preview-item-content flex-grow">

                  <h6 class="preview-subject ellipsis font-weight-medium text-dark">Tim Cook

                    <span class="float-right font-weight-light small-text">15 Minutes ago</span>

                  </h6>

                  <p class="font-weight-light small-text">

                    New product launch

                  </p>

                </div>

              </a>

              <div class="dropdown-divider"></div>

              <a class="dropdown-item preview-item">

                <div class="preview-thumbnail">

                  <img src="images/faces/face3.jpg" alt="image" class="profile-pic">

                </div>

                <div class="preview-item-content flex-grow">

                  <h6 class="preview-subject ellipsis font-weight-medium text-dark"> Johnson

                    <span class="float-right font-weight-light small-text">18 Minutes ago</span>

                  </h6>

                  <p class="font-weight-light small-text">

                    Upcoming board meeting

                  </p>

                </div>

              </a>

            </div>

          </li>

          <li class="nav-item dropdown">

            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">

              <i class="mdi mdi-bell"></i>

              <span class="count">4</span>

            </a>

            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">

              <a class="dropdown-item">

                <p class="mb-0 font-weight-normal float-left">You have 4 new notifications

                </p>

                <span class="badge badge-pill badge-warning float-right">View all</span>

              </a>

              <div class="dropdown-divider"></div>

              <a class="dropdown-item preview-item">

                <div class="preview-thumbnail">

                  <div class="preview-icon bg-success">

                    <i class="mdi mdi-alert-circle-outline mx-0"></i>

                  </div>

                </div>

                <div class="preview-item-content">

                  <h6 class="preview-subject font-weight-medium text-dark">Application Error</h6>

                  <p class="font-weight-light small-text">

                    Just now

                  </p>

                </div>

              </a>

              <div class="dropdown-divider"></div>

              <a class="dropdown-item preview-item">

                <div class="preview-thumbnail">

                  <div class="preview-icon bg-warning">

                    <i class="mdi mdi-comment-text-outline mx-0"></i>

                  </div>

                </div>

                <div class="preview-item-content">

                  <h6 class="preview-subject font-weight-medium text-dark">Settings</h6>

                  <p class="font-weight-light small-text">

                    Private message

                  </p>

                </div>

              </a>

              <div class="dropdown-divider"></div>

              <a class="dropdown-item preview-item">

                <div class="preview-thumbnail">

                  <div class="preview-icon bg-info">

                    <i class="mdi mdi-email-outline mx-0"></i>

                  </div>

                </div>

                <div class="preview-item-content">

                  <h6 class="preview-subject font-weight-medium text-dark">New user registration</h6>

                  <p class="font-weight-light small-text">

                    2 days ago

                  </p>

                </div>

              </a>

            </div>

          </li>

        -->

          <li class="nav-item dropdown d-none d-xl-inline-block">

            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">

              <span class="profile-text text-capitalize">Olá, <?php echo $_SESSION['usuario']; ?>!</span>

              <i class="fas fa-users-cog"></i>

            </a>

            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">

              <a class="dropdown-item p-0">

                <!-- div class="d-flex border-bottom">

                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">

                    <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>

                  </div>

                  <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">

                    <i class="mdi mdi-account-outline mr-0 text-gray"></i>

                  </div>

                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">

                    <i class="mdi mdi-alarm-check mr-0 text-gray"></i>

                  </div>

                </div -->

              </a>

              <a class="dropdown-item mt-2" href="#">

                Gerenciar Contas <span class="badge badge-warning">Em breve</span>

              </a>

              <a class="dropdown-item" href="#">

                Alterar Senha <span class="badge badge-warning">Em breve</span>

              </a>

              <a class="dropdown-item" href="register.php">

                Criar nova conta <span class="badge badge-success">NOVO</span>

              </a>

              <a class="dropdown-item" href="config/logout.php">

                Sair

              </a>

            </div>

          </li>

        </ul>

        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">

          <span class="mdi mdi-menu"></span>

        </button>

      </div>

    </nav>

    <!-- partial -->

    <div class="container-fluid page-body-wrapper">

      <!-- partial:partials/_sidebar.html -->

      <nav class="sidebar sidebar-offcanvas" id="sidebar">

        <ul class="nav">

          <li class="nav-item nav-profile">

            <div class="nav-link">

              <div class="user-wrapper">

                <div class="profile-image">

                  <img src="images/icone.jpg" alt="profile image">

                </div>

                <div class="text-wrapper">

                  <p class="profile-name text-capitalize"><?php echo $_SESSION['usuario']; ?></p></p>

                  <div>

                    <small class="designation text-muted">Administrador</small>

                    <span class="status-indicator online"></span>

                  </div>

                </div>

              </div>


              <a href="https://drive.google.com/file/d/1zDinwOa5COoWkW9bAFGmCI2pkhVuUwLP/view?usp=sharing" target="_blank" class="btn btn-dark btn-block">Planilha de Backup

                <i class="fas fa-history"></i>

              </a>


            </div>

          </li>

          <li class="nav-item">

            <a class="nav-link" href="painel.php">

              <i class="menu-icon fas fa-home"></i>

              <span class="menu-title">Página Inicial</span>

            </a>

          </li>

          

          <li class="nav-item">

            <a class="nav-link" data-toggle="collapse" href="#clientes" aria-expanded="false" aria-controls="clientes">

              <i class="menu-icon fa fa-users"></i>

              <span class="menu-title">Clientes</span>

              <i class="menu-arrow"></i>

            </a>

            <div class="collapse" id="clientes">

              <ul class="nav flex-column sub-menu">

                <li class="nav-item">

                  <a class="nav-link" href="cadastrar-cliente.php">Cadastrar clientes</a>

                </li>

                <li class="nav-item">

                  <a class="nav-link" href="listar-clientes.php">Listar todos clientes</a>

                </li>

              </ul>

            </div>

          </li>





          <li class="nav-item">

            <a class="nav-link" data-toggle="collapse" href="#funcionarios" aria-expanded="false" aria-controls="funcionarios">

              <i class="menu-icon fa fa-address-card"></i>

              <span class="menu-title">Funcionários</span>

              <i class="menu-arrow"></i>

            </a>

            <div class="collapse" id="funcionarios">

              <ul class="nav flex-column sub-menu">

                <li class="nav-item">

                  <a class="nav-link" href="cadastrar-funcionario.php">Cadastrar funcionário</a>

                </li>

                <li class="nav-item">

                  <a class="nav-link" href="listar-funcionarios.php">Listar todos funcionários</a>

                </li>

              </ul>

            </div>

          </li>



          <li class="nav-item">

            <a class="nav-link" data-toggle="collapse" href="#instaladores" aria-expanded="false" aria-controls="instaladores">

              <i class="menu-icon fa fa-street-view"></i>

              <span class="menu-title">Instaladores</span>

              <i class="menu-arrow"></i>

            </a>

            <div class="collapse" id="instaladores">

              <ul class="nav flex-column sub-menu">

                <li class="nav-item">

                  <a class="nav-link" href="cadastrar-instalador.php">Cadastrar instalador</a>

                </li>

                <li class="nav-item">

                  <a class="nav-link" href="listar-instaladores.php">Listar todos instaladores</a>

                </li>

              </ul>

            </div>

          </li>









          <li class="nav-item">

            <a class="nav-link" href="#">

              <i class="menu-icon fas fa-chart-pie"></i>

              <span class="menu-title">Fluxo de Caixa <span class="badge badge-warning">Em breve</span></span>

            </a>

          </li>

          

          </li>

        </ul>

      </nav>