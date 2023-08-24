<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CS APP - ADMIN</title>
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../img/second-icon.png" type="image/x-icon">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

</head>
<body id="page-top">
    <header>
        <div class="collapse bg-dark" id="cabecalho">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 col-md-7 py-4">
                  <a class="sidebar-brand d-flex text-white" href="../index.php">
                    <div class="sidebar-brand-icon rotate-n-15">
                      <i class="fas fa-laugh-wink"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">CS App<sup>v1</sup></div>
                  </a>
                <hr class="sidebar-divider my-0">
                <small class="text-white text-justify">
                    Transformar o homem em um ser competente por meio das tecnologias de informação e
                    comunicação, o CS_APP tem a finalidade de auxiliar neste aspecto dando oportunidade 
                    a toda comunidade estudantil de interação via online trocando informações e analisando
                    trabalhos colectivos.
                </small>
              </div>
              <div class="col-sm-4 offset-md-1 py-4">
                <h4 class="text-white">Navegação - <i class="fas fa-laugh-wink"></i></h4>
                <ul class="list-unstyled">
                  <li><a href="#" class="text-white"><i class="fas fa-wrench"></i> Manutenção de Informação</a></li>
                  <li><a href="#" class="text-white"><i class="fas fa-edit"></i> Editar Perfil</a></li>
                  <li><a href="#" class="text-white" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-sign-out-alt"></i> Terminar Sessão</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!--
          // CABECALHO DA PAGINA
        -->
        <div class="navbar navbar-dark bg-dark shadow-sm">
          <div class="container d-flex">
            <a href="#" class="navbar-brand d-flex">
                <div class="sidebar-brand-icon rotate-n-15">
                      <i class="fas fa-home"></i>
                </div> &nbsp;
              <strong>Área Administrativa </strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cabecalho">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
        </div>
      </header>
      <main role="main">
         <div class="col-md-12 col-lx-12">
            <section class="text-center">
            <div class="container">
              <h1 class="jumbotron-heading">Comunication Students Application</h1>
              <p class="lead text-muted">
                Esta área é restrita para administradores do software, parte para - manutenção de informações 
                referentes às Universidades e estudantes cadastrados !  
            </p>
              <p>
                <a href="#" class="btn btn-primary my-2"><i class="fas fa-school"></i> Adicionar Uninversidade</a>
                <a href="#" class="btn btn-primary my-2"><i class="fas fa-user"></i> Cadastrar Gestores de Informação</a>
              </p>
            </div>
          </section>
         </div>

         <!-- #### ALBUM DOS ADMINISTRADORES ###### -->

         <div class="album py-5 bg-light">
    <div class="container">
    <h2 class="jumbotron-heading p-2 text-center lead">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/>
    <circle cx="12" cy="13" r="4"/></svg>
    Administradores</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="../img/principal.png">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="../img/05-big-item.jpg">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="../img/06-big-item.jpg">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>        
      </div>
    </div>
  </div>
</main>
       <!-- Footer -->
       <footer class="col-lx-12 sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; CS Application <?php echo date('Y');?></span>
          </div>
        </div>
      </footer>
      <!-- Fim do rodapé -->


      <!-- Scroll do botão acima-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <!-- Modal de Termino de Sessão-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tem certeza <i class="fas fa-question"></i> </h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body text-info"><i class="fas fa-info"></i> Seleciona "Terminar Sessão" para sair da aplicação.</div>
        <div class="modal-footer">
          <button class="btn btn-danger" type="button" data-dismiss="modal"><i class="fas fa-info"></i> Cancelar</button>
          <a class="btn btn-primary" href="index.php"><i class="fas fa-sign-out-alt"></i> Terminar Sessão</a>
        </div>
      </div>
    </div>
  </div>

  <!-- -->

              <!-- Bootstrap  JavaScript-->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!--plugins do JavaScript-->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Script personalisado para todas as paginas-->
        <script src="../js/sb-admin-2.min.js"></script>
   
</body>
</html>