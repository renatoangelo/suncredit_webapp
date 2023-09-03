<?php
include("../include/default.php");
?>
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
            <h1 class="m-0">FrotaSystem</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../dashboard/index.php">Home</a></li>
              <li class="breadcrumb-item active">Carros</li>
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
            <h3 class="card-title"><i class="fa-solid fa-house"></i> Listagem dos Veiculos</h3>
          </div>
          <!-- table start -->
          <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 100%;">
                    <input type="text" name="table_search"  id="valueTransacted" class="form-control float-right" placeholder="Type desired amount">
                    <input readonly type="text" name="table_search" id="newValue" class="form-control float-right">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        Trade
                      </button>
                </div>
              </div>
    <!-- /.content -->
  </div>

  <script>
        document.getElementById("valueTransacted").addEventListener("input", function(){
        document.getElementById("newValue").value = parseInt(this.value) * 1000 + " EC";
    });

  function calc_ec() {
    let test = document.getElementById('valueTransacted').value;
    console.log(test);
    document.getElementById('newValue').value = parseInt(test) * 1000;
  }
  </script>

  <?php  include("../common/footer.php"); ?>