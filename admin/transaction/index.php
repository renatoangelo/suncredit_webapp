<?php
include("../include/default.php");

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
var_dump($dados);

if(!empty($dados['trade'])) {
  $query_trade = "UPDATE balance SET bal_kwh = (bal_kwh - :valueTransacted),
  bal_coins = (bal_coins + :newValue)
  WHERE user_id = 1";

  $result_trade = $conn->prepare($query_trade);
  $result_trade->bindParam(':valueTransacted', $dados['valueTransacted'], PDO::PARAM_INT);
  $result_trade->bindParam(':newValue', $dados['newValue'], PDO::PARAM_INT);

  if ($result_trade->execute()) {
    $_SESSION['msg'] = "<p style='color: #32c330;text-align: center;font-weight: bold;'>Imóvel cadastrado com Sucesso!</p>";

  } else {
    $_SESSION['msg'] = "<p style='color: #ff0000;text-align: center;font-weight: bold;'>ERRO: Tente Novamente!</p>"; 
  }

} else {

}
?>
<style>

</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<?php include("../common/navbar.php"); ?>

<?php include("../common/sidebar.php"); ?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">SunCredit</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../dashboard/index.php">Home</a></li>
              <li class="breadcrumb-item active">Transactions</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="card card-primary">
          <!-- .card-header -->
          <div class="card-header">
            <h3 class="card-title">Trading</h3>
          </div>
          <!-- table start -->
          <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-tools">
                <form method="POST" action="" class="form-post" >
                <div class="input-group input-group-sm" style="width: 100%;">
                    <input type="text" name="valueTransacted"  id="valueTransacted" class="form-control float-right" placeholder="Type desired amount">
                    <input readonly type="text" name="newValue" id="newValue" class="form-control float-right">
                </div>
                <div class="input-group-append">
                    <button type="submit" value="trade" name="trade" class="btn btn-default">
                    Trade
                    </button>
                </div>
                </form>
                <!-- /.content -->
  </div>
</div>

  <script>
        document.getElementById("valueTransacted").addEventListener("input", function(){
        document.getElementById("newValue").value = parseInt(this.value) * 1000;
    });
  </script>

  <?php  include("../common/footer.php"); ?>