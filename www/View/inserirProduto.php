<?php 
    if(isset($_SESSION['clientarray']))
    {
        $clientarray = unserialize($_SESSION['clientarray']);
    }
    
    
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    if(isset($_SESSION['groupid']))
    {
       $usergroupid = $_SESSION['groupid'];
    }

    if(isset($_SESSION['groupid']) && $_SESSION['groupid'] != 2)
    {
        header("Location: " . DIRPAGE . "/arearestrita");
        exit;
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

    if(time() - $_SESSION['loginTime'] > SESSIONTIME)
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
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo DIRPAGE . "/" ?>img/favicon.png">
    <title>Inserir Produto</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo DIRPAGE . "/" ?>panel-bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="<?php echo DIRPAGE . "/" ?>lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo DIRPAGE . "/" ?>panel-plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css"
        rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?php echo DIRPAGE . "/" ?>css/panel-animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo DIRPAGE . "/" ?>css/panel-style.css" rel="stylesheet">
    <!-- Custom CSS table -->
    <link href="<?php echo DIRPAGE . "/" ?>css/styleTable.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo DIRPAGE . "/" ?>css/panel-colors/default.css" id="theme" rel="stylesheet">

    <!-- jQuery -->
    <script src="<?php echo DIRPAGE . "/" ?>js/jquery-3.3.1.js"></script>

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
                            <img src="<?php echo DIRPAGE . "/" ?>images/logo_santairia.png" alt="home"
                                style="height: 60px; width: 140px" class="dark-logo" />
                            <!--This is light logo text-->
                            <img src="<?php echo DIRPAGE . "/" ?>images/logo_santairia.png" alt="home"
                                style="height: 60px; width: 140px;" class="light-logo" />
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
                            aria-haspopup="true" aria-expanded="false"> <img
                                src="<?php echo DIRPAGE . "/" ?>panel-plugins/images/users/admin.jpg" alt="user-img"
                                width="36" class="img-circle" style="border:2px solid #eeeeec;"><b class="hidden-xs"
                                style="color:#4c5667"><?php echo $_SESSION['username'];?></b></a>
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
                        <a style="margin-left: 10%"
                            class="nav-toggler open-close waves-effect waves-light hidden-md hidden-lg"
                            href="javascript:void(0)"><i style="color: #000" class="fa fa-bars"></i></a>
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

                    <li>
                        <a href="<?php echo DIRPAGE . "/product/insert"?>" class="waves-effect"><i
                                class="fa fa-plus fa-fw" aria-hidden="true"></i>Inserir Produto</a>
                    </li>
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
                            <?php if(isset($_GET["insert"]) && $_GET["insert"] == 'sucess')
                        {
                            echo "<span class='text' style='color:green'>
                                    Produto inserido com sucesso.
                                </span>  <br/>" ; 
                        }
                        else if(isset($_GET["insert"]) && $_GET["insert"] == 'fail')
                            {
                                echo "<span class='text' style='color:red'>
                                    Produto não inserido. Por favor, entre em contato com a administração.
                                </span>  <br/>" ; 
                            } ?>
                            <a style="float: left;" type="button" class="btn btn-outline-info"
                                href='<?php echo DIRPAGE . '/tableproducts' ?>'>Visualizar Produtos</a>

                            <h3 class="box-title">Inserir Produto
                            </h3>

                            <br />

                            <form method="post" action="<?php echo DIRPAGE . "/product/insert/add" ?>">
                                <div class="form-row">
                                    <div class="form-group col-sm-12">
                                        <label for="inputPassword4">Nome</label>
                                        <input type="name" name="name" class="form-control" id="name"
                                            placeholder="Nome">
                                    </div>

                                </div>
                                <div style="padding: 15px;text-align: left">
                                    <input type="submit" value="Inserir produto" name="submit"
                                        class="btn btn-outline-info">
                                </div>


                        </div>
                    </div>
                </div>



                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2019 &copy; TecReason - Treinamento e Consultoria</footer>
        </div>
        <!-- /#page-wrapper -->
    </div>

    <!--Model Select starts-->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" style="font-weight: bold;" id="exampleModalLabel">New message
                    </h4>
                </div>

                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Assunto:</label>
                            <input type="text" class="form-control" id="recipient-name" disabled>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="control-label">Message:</label>
                            <textarea class="form-control" style="height:350px;" id="message-text" disabled></textarea>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!--Model select ends-->

    <!--Model confirmation starts-->
    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="?funcao=delete">
                    <div class="modal-header">
                        Você tem certeza?
                    </div>
                    <div class="modal-body">
                        Você realmente quer remover esse registro?
                        <input name="id" type="hidden" class="form-control" id="id">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button id="delete=btn" type="submit" name="delete"
                            class="btn btn-danger btn-ok">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        var cont = 1;
        $("#btn-add").click(function () {
            $("#insert-row").append("<div id='campo" + cont + "' ><label>ITEM " + cont + "</label>" +
                "<div class='form-group col-sm-2'>" +
                "<label for='inputPassword4'>Cliente</label>" +
                "<select name='clients' id='clients' class='form-control'>" +
                "<option selected>Venda anônima</option>" +
                "<?php foreach($clientarray as $value) {?>" +
                "<option><?php echo $value->getNome();?></option>" +
                "<?php }?>" +

                "</select>" +
                "</div>" +

                "<div class='form-group col-sm-3'>" +
                "<label for='inputState'>Produto</label>" +
                "<select name='produto[]' id='produto' class='form-control'>" +
                "<option selected>Escolha</option>" +
                "<option>...</option>" +
                "  </select>" +
                "</div>" +

                "<div class='form-group col-sm-2'>" +
                "<label for='inputPassword4'>Quantidade</label>" +
                "<input type='number' class='form-control' name='quantidade[]' id='quantidade' placeholder='Qtd'>" +
                "</div>" +

                "<div class='form-group col-sm-2'>" +
                "<label for='inputPassword4'>Valor</label>" +
                "<input type='number' class='form-control' name='valor[]' id='valor' placeholder='Valor'>" +
                "</div>" +

                "<div class='form-group col-sm-2'>" +
                "<label for='inputPassword4'>Total</label>" +
                "<input type='number' class='form-control' name='total[]' id='total' placeholder='Total'>" +
                "</div>" +

                "<div class='form-group align-items-center'>" +
                "<button id='" + cont + "' style='' type='button'" +
                "class='btn-apagar btn btn-outline-info'>Del</button>" +
                "</div><br/></div>");
            cont++;
        });

        $("form").on("click", ".btn-apagar", function () {
            var buttonid = $(this).attr("id");
            $('#campo' + buttonid + '').remove();
            cont--;
        });
    </script>

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
    <script type="text/javascript">
        $('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var assunto = button.data('assunto')
            var id = button.data('id')
            var mensagem = button.data('mensagem')
            var nome = button.data('nome')

            var modal = $(this)
            modal.find('.modal-title').text(nome)
            modal.find('#recipient-name').val(assunto)
            modal.find('#message-text').val(mensagem)
            modal.find('#recipient-id').val(id)
        })
    </script>
    <script type="text/javascript">
        $('#confirm-delete').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var id = button.data('id')

            var modal = $(this)
            modal.find('#id').val(id)
        })
    </script>

</body>

</html>