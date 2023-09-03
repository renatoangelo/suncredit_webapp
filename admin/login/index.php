<?php
session_start();
ob_start();
include_once '../include/connection.php';
include_once '../common/header.php';
?>
<style>
body {
  background-image: url('../dist/img/background.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  display: flex;
  align-items: center;
  justify-content: center;
}
</style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../login/"><b>Frota</b>System</a>
  </div>
  <!-- /.login-logo -->

<?php

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(!empty($dados['sendlogin'])) {
  //var_dump($dados);

  $query_user = "SELECT id, name, email, password, permission FROM users WHERE email = :email LIMIT 1";
  $result_user = $conn->prepare($query_user);
  $result_user->bindParam(':email', $dados['email'], PDO::PARAM_STR);
  $result_user->execute();

  if(($result_user) AND ($result_user->rowCount() !=0)) {
    $row_user = $result_user->fetch(PDO::FETCH_ASSOC);
    //var_dump($row_user);

    if(password_verify($dados['password'], $row_user['password'])) {
      $_SESSION['id'] = $row_user['id'];
      $_SESSION['name'] = $row_user['name'];
      $_SESSION['tenta'] = 0;
      header("Location: ../dashboard/index.php");
    } else {
      $_SESSION['tenta'] = $_SESSION['tenta'] + 1;
      $_SESSION['msg'] = "<p style='color: #ff0000;text-align: center;font-weight: bold;'>Usuário ou Senha Incorretos</p><h3>Tentativa Nº " . $_SESSION['tenta'] . "</h3>";
      if ($_SESSION['tenta'] >=3) {
        // echo "<script>window.alert('vc ultrapassou as tentativas permitidas');</script>";
        $_SESSION['tenta'] = 0;
        header("Location: ../dashboard/index.php");
      }

    }

  } else{
    $_SESSION['tenta'] = $_SESSION['tenta'] + 1;
      $_SESSION['msg'] = "<p style='color: #ff0000;text-align: center;font-weight: bold;'>Usuário ou Senha Incorretos</p><h3>Tentativa Nº " . $_SESSION['tenta'] . "</h3>";
      if ($_SESSION['tenta'] >=3) {
        // echo "<script>window.alert('vc ultrapassou as tentativas permitidas');</script>";
        $_SESSION['tenta'] = 0;
        header("Location: ../dashboard/index.php");
      }
  }

  
}

?>


  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Faça seu LogIn</p>

      <?php
        if (isset($_SESSION['msg'])) {
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
        }
      ?>
      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email" value="<?php if(isset($dados['email'])) { echo $dados['email']; } ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Senha" value="<?php if(isset($dados['password'])) { echo $dados['password']; } ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="remember">
              <label for="remember">
                Mantenha conectado
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="sendlogin" value="access" class="btn btn-primary btn-block">Logar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="forgot_password.php">Esqueci minha Senha</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<script lang="js">

</script>

<?php
include("../common/header.php");
?>