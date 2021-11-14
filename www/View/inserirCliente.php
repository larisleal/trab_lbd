<?php 
    
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    if(isset($_SESSION['groupid']))
    {
       $usergroupid = $_SESSION['groupid'];
    }

    if(!isset($_SESSION['username']) && !isset($_SESSION['password']))
    {
        header("Location: " . DIRPAGE . "/login");
        session_destroy();
        exit;
    }

    if(!(time() - $_SESSION['loginTime'] > 600))
    {
        $_SESSION['loginTime'] = time();
    }

    if(time() - $_SESSION['loginTime'] > 600)
    {
        header("Location: " . DIRPAGE . "/login?time=out");
        session_destroy();
        exit;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">
    <title>Inserir Cliente</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo DIRPAGE . "/" ?>panel-bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="<?php echo DIRPAGE . "/" ?>lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo DIRPAGE . "/" ?>panel-plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css"
        rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?php  echo DIRPAGE . "/" ?>css/panel-animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo DIRPAGE . "/" ?>css/panel-style.css" rel="stylesheet">
    <!-- Custom CSS table -->
    <link href="<?php  echo DIRPAGE . "/" ?>css/styleTable.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo DIRPAGE . "/" ?>css/panel-colors/default.css" id="theme" rel="stylesheet">

    <!-- Number input mask-->
    <script src="<?php echo DIRPAGE . "/" ?>js/jquery.min.js"></script>
    <script src="<?php echo DIRPAGE . "/" ?>js/jquery.mask.min.js"></script>

</head>

<body class="fix-header">

    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header" style="background: #fff;">
                <div class="top-left-part" style="text-align: center">
                    <!-- Logo -->
                    <a class="logo" href="<?php echo DIRPAGE . "/arearestrita"?>">
                        <!-- <b> -->
                            <!--This is dark logo icon-->
                            <!-- <img src="images/logo_santairia.png" alt="home" style="height: 31px; width: 39px"
                                class="dark-logo" /> -->
                            <!--This is light logo icon-->
                            <!-- <img src="images/logo_santairia.png" alt="home" style="height: 31px; width: 39px"
                                class="light-logo" /> -->
                        <!-- </b> -->


                        <!-- Logo text image you can use text also -->
                        <span class="hidden-xs">
                            <!--This is dark logo text-->
                            <img src="<?php echo DIRPAGE . "/" ?>images/logo_santairia.png" alt="home" style="height: 60px; width: 140px"
                                class="dark-logo" />
                            <!--This is light logo text-->
                            <img src="<?php echo DIRPAGE . "/" ?>images/logo_santairia.png" alt="home" style="height: 60px; width: 140px;"
                                class="light-logo" />
                        </span>
                    </a>
                    
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a style="color: #000; margin-top: 25%;"
                            class="nav-toggler open-close waves-effect waves-light hidden-md hidden-lg"
                            href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                    </li>
                    <li>
                        <!-- <form role="search" class="app-search hidden-sm hidden-xs m-r-10 ">
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href="">
                                <i class="fa fa-search"></i>
                            </a>
                        </form> -->
                    </li>
                    <li>
                        <a class="profile-pic" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"> <img src="<?php echo DIRPAGE . "/" ?>panel-plugins/images/users/admin.jpg"
                                alt="user-img" width="36" class="img-circle" style="border:2px solid #eeeeec;"><b
                                class="hidden-xs" style="color:#4c5667"><?php echo $_SESSION['username'];?></b></a>
                        <div onclick="location.href='<?php echo DIRPAGE . '/logout' ?>';"
                            class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="<?php echo DIRPAGE . "/logout" ?>">Sair</a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->

        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3> <img src="<?php echo DIRPAGE . "/"?>images/logo_santairia.png" alt="home"
                            style="margin-left: 15%; height: 50px; width: 120px;" class="light-logo" />
                            <a style="margin-left: 10%" class="nav-toggler open-close waves-effect waves-light hidden-md hidden-lg" href="javascript:void(0)"><i style="color: #000" class="fa fa-bars"></i></a>
                        <hr />
                    </h3>
                </div>
                <ul class="nav" id="side-menu" style="margin-top: 10px">
                    <li style="padding: 90px 0 0;">
                        <a href="<?php echo  DIRPAGE . "/arearestrita"?>" class="waves-effect"><i
                                class="fa fa-home fa-fw" aria-hidden="true"></i>Início</a>
                    </li>

                    <li>
                        <a href="<?php echo DIRPAGE . "/leads"?>" class="waves-effect"><i class="fa fa-user-plus fa-fw"
                                aria-hidden="true"></i>Interessados</a>
                    </li>
                    <li>
                        <a href="<?php echo DIRPAGE . "/clients"?>" class="waves-effect"><i class="fa fa-user fa-fw"
                                aria-hidden="true"></i>Clientes</a>
                    </li>

                    <li>
                        <a href="<?php echo DIRPAGE . "/sales"?>" class="waves-effect"><i class="fa fa-usd fa-fw"
                                aria-hidden="true"></i>Vendas</a>
                    </li>

                    <?php if($usergroupid == ADMINGROUP ) {?>
                    <li>
                        <a href="<?php echo DIRPAGE . "/product/insert"?>" class="waves-effect"><i
                                class="fa fa-plus fa-fw" aria-hidden="true"></i>Inserir Produto</a>
                    </li>
                    <?php }?>
                </ul>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Inserir Cliente</h3>
                            <br />

                            <form method="post" action="<?php echo DIRPAGE . "/clients/insert/add"?>">
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label for="inputEmail4">Nome</label>
                                        <input type="name" class="form-control" name="name" id="name" 
                                            placeholder="Nome Completo" required>
                                    </div>
                                    
                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4">Data de Aniversário</label>
                                        <input type="data" class="form-control" name="datanasc" id="datanasc"
                                            placeholder="Data de Aniversário" required>
                                    </div>

                                    <script type="text/javascript">
                                        $("#datanasc").mask("00/00/0000");
                                    </script>

                                    <div class="form-group col-md-8">
                                        <label for="inputEmail4">E-mail</label>
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="E-mail" required>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4">Telefone</label>
                                        <input type="tel" name="phone" class="form-control cel-sp-mask" id="phone"
                                            placeholder="Telefone" required>
                                    </div>

                                    <script type="text/javascript">
                                        $("#phone").mask("(00) 00000-0000");
                                    </script>

                                    <div class="left" style="text-align: center;">
                                        <input type="submit" name="submit" class="btn btn-outline-info btn-lg" value="Cadastrar">
                                    </div>
                            </form>


                        </div>
                    </div>
                </div>



                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2020 &copy; TecReason - Treinamento e Consultoria</footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    </div>

    <!--Model select ends-->

    <!--Model confirmation starts-->
    <div class="modal fade" id="confirm-insert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="<?php echo DIRPAGE . "/client/insert/in" ?>">
                    <div class="modal-header">
                        Você tem certeza?
                    </div>
                    <div class="modal-body">
                        Confirmar para inserir esse registro
                        <input name="id" type="hidden" class="form-control" id="id">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button id="delete=btn" type="submit" name="insert"
                            class="btn btn-danger btn-ok">Inserir</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Model confirmation ends-->
    <!-- jQuery -->
    <script src="<?php echo DIRPAGE . "/" ?>panel-plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo DIRPAGE . "/" ?>panel-bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->

    <script src="<?php echo DIRPAGE . "/" ?>panel-plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js">
    </script>
    <!--slimscroll JavaScript -->
    <script src="<?php echo DIRPAGE . "/" ?>js/panel-jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo DIRPAGE . "/" ?>js/panel-waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo DIRPAGE . "/" ?>js/panel-custom.min.js"></script>
    <!-- /#wrapper -->

</body>

</html>