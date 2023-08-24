<!DOCTYPE html>
<html lang="pt">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CS Application - Registrar Usuário</title>

  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="img/second-icon.png" type="image/x-icon">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Corpo do Painel -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h3 text-gray-900 mb-4"><i class="fas fa-edit"></i> Criar uma Conta <i class="fas fa-user"></i></h1>
              </div>
              <form class="user">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="primeiroNome" placeholder="Primeiro Nome">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="ultimoNome" placeholder="Ultimo Nome">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="email" placeholder="Exemplo@gmail.com">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="senha" placeholder="Senha">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="repetirSenha" placeholder="Repita a Senha">
                  </div>
                </div>
                <a href="#" class="btn btn-primary btn-user btn-block">
                <i class="fas fa-user fa-fw"></i> Registrar Usuário
                </a>
                <hr>
                <a href="principal.php" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Registrar com Facebook
                </a>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.php"><i class="fas fa-question"></i> Esqueceu a senha</a>
              </div>
              <div class="text-center">
                <a class="small" href="index.php">Já tem uma conta<i class="fas fa-question"></i> Login <i class="fas fa-sign-in-alt"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
