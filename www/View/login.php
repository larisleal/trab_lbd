<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Agro Santa Iria - Área Restrita</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/login-util.css">
    <link rel="stylesheet" type="text/css" href="css/login-main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form p-l-55 p-r-55 p-t-55" method="post" action="<?php echo DIRPAGE . "/logar" ?>">
                    <div class="logo" style="text-align: center;">
                        <a class="navbar-brand p-b-55" href="<?php echo DIRPAGE . "/" ?>">
                            <h1 id="logo">
                                <img src="images/logo_santairia.png" alt="Brandi">
                            </h1>
                        </a>
                    </div>
                    <div class="wrongpass">
                        <?php 
					if(isset($_SESSION['pass']))
					{
					    echo "<span class='text' style='color:red'>
							Usuário ou senha incorretos!
						</span>" ;  
                    }
                    else if(isset($_GET['time']) && $_GET['time'] == 'out')
					{
					    echo "<span class='text' style='color:red'>
							Tempo da sessão esgotada. Por favor, entre novamente!
						</span>" ;  
					}
					?>
                    </div>

                    <div class="wrap-input100 validate-input m-b-16"
                        data-validate="Por favor, insira um nome de usuário.">
                        <input class="input100" type="text" name="username" placeholder="Usuário">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Por favor, insira uma senha.">
                        <input class="input100" type="password" name="pass" placeholder="Senha">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="text-right p-t-13 p-b-23">
                        <span class="txt1">

                        </span>

                        <!-- <a href="#" class="txt3">
							Username / Password?
						</a> -->
                    </div>

                    <div class="input-group" style="color: #00000">
                        <button name="enviar" type="submit" id="form-submit" class="login100-form-btn" value="Enviar">
                            Entrar
                        </button>
                    </div>

                    <div class="flex-col-c p-t-170 p-b-40">

                        <a href="?funcao=recover" class="txt3">
                            Esqueci minha senha
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/login-main.js"></script>

</body>

</html>