<?php 
    if(isset($_SESSION['visitor']))
    {
        $totalVisitors = unserialize($_SESSION['visitor']);
    }
    if(isset($_SESSION['leadarray']))
    {
        $leadArray = unserialize($_SESSION['leadarray']);
    }


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
    <title>Área Restrita</title>
    <!-- panel-animate.css Core CSS -->
    <link href="panel-bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="panel-plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="panel-plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="panel-plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="panel-plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="panel-plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css"
        rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/panel-animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/panel-style.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/panel-colors/default.css" id="theme" rel="stylesheet">

</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <!--     <div class="preloader"> -->
    <!--         <svg class="circular" viewBox="25 25 50 50"> -->
    <!--             <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> -->
    <!--         </svg> -->
    <!--     </div> -->
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
                            <img src="images/logo_santairia.png" alt="home" style="height: 60px; width: 140px"
                                class="dark-logo" />
                            <!--This is light logo text-->
                            <img src="images/logo_santairia.png" alt="home" style="height: 60px; width: 140px;"
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
                            aria-haspopup="true" aria-expanded="false"> <img src="panel-plugins/images/users/admin.jpg"
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
                    <h3> <img src="images/logo_santairia.png" alt="home"
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
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Different data widgets -->
                <!-- ============================================================== -->
                <!-- .row -->
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total de interessados</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-success"></i> <span
                                        class="counter text-success"><?php echo count($leadArray); ?></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total de acesso a pagina</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash2"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span
                                        class="counter text-purple"><?php if($totalVisitors!=null) echo $totalVisitors[0]->getVisitors(); else echo 0; ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Assinaturas de Email</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash3"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-info"></i> <span
                                        class="counter text-info">0</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/.row -->
                <!--row -->
                <!-- /.row -->

                <!-- ============================================================== -->
                <!-- table -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- chat-listing & recent comments -->
                <!-- ============================================================== -->

            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2019 &copy; TecReason - Treinamento e Consultoria </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="panel-plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="panel-bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="panel-plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/panel-jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/panel-waves.js"></script>
    <!--Counter js -->
    <script src="panel-plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="panel-plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!-- chartist chart -->
    <script src="panel-plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
    <script src="panel-plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js">
    </script>
    <!-- Sparkline chart JavaScript -->
    <script src="panel-plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/panel-custom.min.js"></script>
    <script src="js/panel-dashboard1.js"></script>
    <script src="panel-plugins/bower_components/toast-master/js/jquery.toast.js"></script>
</body>

</html>