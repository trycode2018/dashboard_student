<!DOCTYPE html>
<html lang="pt">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Henrique Ventura">

  <title>CS Application - Login</title>

  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="img/second-icon.png" type="image/x-icon">

</head>

<body class="bg-gradient-primary">

  <div class="container">
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h3 text-gray-900 mb-4"><i class="fas fa-user"></i> <i class="fas fa-sign-in-alt"></i> Login CS App</h1>
                  </div>
                  <form class="user">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="email" aria-describedby="emailHelp" placeholder="Insira o Endereço de Email...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="senha" placeholder="Palavra Passe">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Salvar Senha no Browser</label>
                      </div>
                    </div>
                    <a href="principal.php" class="btn btn-primary btn-user btn-block">
                      Login
                    </a>
                    <hr>
                    <a href="#" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login com o Facebook
                    </a>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.php"><i class="fas fa-question"></i> Esqueceu a Senha</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.php"><i class="fas fa-edit"></i> Criar um Conta <i class="fas fa-user"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Bootstrap  JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!--plugins do JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Script personalisado para todas as paginas-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
