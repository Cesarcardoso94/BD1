
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Gestão Covid</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css" />
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css" />
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css" />
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css" />
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60" />
        </div>

        <!-- Navbar -->


        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-primary border">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <!-- <img
            src="dist/img/AdminLTELogo.png"
            alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3"
            style="opacity: 0.8"
          /> -->
                <span class="brand-text font-weight-light">Gestão Covid</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <!-- <div class="image">
              <img
                src="dist/img/user2-160x160.jpg"
                class="img-circle elevation-2"
                alt="User Image"
              />
            </div> -->
                    <div class="info">
                        <a href="#" class="d-block">Leitos Cadastrados</a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="pessoaV.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>Pacientes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="cadPessoaF.html" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Funcionarios
                                    <i class="fas right"></i>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="cadDoenca.html" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Doenças
                                    <i class="right fas"></i>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="alocLeito.html" class="nav-link">
                                <i class="nav-icon fas fa-tree"></i>
                                <p>
                                    Leitos
                                    <i class="fas"></i>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="cadTeste.html" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Testes
                                    <i class="fas"></i>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class=""></i>
                                <p>
                                    Sair
                                    <i class="fas"></i>
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div id="ajuste" class="border">
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-12">
                                <h1 class="m-0">Variantes COVID cadastradas</h1>
                                <hr />
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <!-- Main row -->
                        <div class="row justify-content-center">
                            <!-- Left col -->
                            <section class="col-lg-12 connectedSortable">
                                <table class="table table-striped table-bordered">
                                    <tr>
                                        <th>CPF Paciente Testado</th>
                                        <th>Identificador Teste</th>
                                        <th>Resultado</th>
                                        <th>Data</th>
                                        
                                    </tr>                               
                                    <?php include "connectionBD.php";
                                    $sql_teste = "SELECT * FROM teste";
                                    $resulta = mysqli_query($conn, $sql_teste);

                                    if ($resulta->num_rows > 0) {
                                        while ($row = $resulta->fetch_assoc()) {

                                            echo '<tr>';
                                            echo '<td>' . $row['pacienteCPF'] . '</td>';
                                            echo '<td>' . $row['idTeste'] . '</td>';
                                            echo '<td>' . $row['resultado'] . '</td>';
                                            echo '<td>' . $row['data'] . '</td>';
                                            echo '</tr>';
                                        }
                                    }



                                    ?>
                                </table>
                                <div id="abaixo" class="row">
                                    <div class="col-sm-2" style="margin-left: 50px;">
                                        <a href ="alocLeito.html"button type="button" class="btn btn-primary">Cadastrar</a>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- /.row (main row) -->
                    </div>
                    <!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021
                <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.1.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge("uibutton", $.ui.button);
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>