<!doctype html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<title>Agro Santa Iria</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- CONTATO -->

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>

	<!-- Css -->
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" />
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/modal-sucess.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">

	<!-- jS -->
	
	<!-- Number input mask-->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.mask.min.js"></script>

	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
	<script src="js/owl.carousel.min.js" type="text/javascript"></script>
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/main.js" type="text/javascript"></script>


</head>

<body>
	<!--Model Popup starts-->
	<div class="container">
		<div class="row">
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">

						<div class="modal-body">

							<div class="thank-you-pop">
								<img src="http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png"
									alt="">
								<h1>Obrigado, <?php echo $_GET['sucess'] ?>!</h1>
								<p>Entraremos em contato com você em breve.</p>
							</div>
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal"
									onclick="history.pushState('Contato','Contato','<?php echo DIRPAGE . '/contato' ?>'); return false;"
									aria-label=""><span>Fechar</span></button>
							</div>

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Model Popup ends-->

	<?php
	if(isset($_GET['sucess'])){ ?>
	<script>
		$(document).ready(function () {
			$('#myModal').modal('show');
		});
	</script>

	<?php     
     } ?>

	<!-- TOP HEADER Start
    ================================================== -->

	<section id="top">
		<div class="container">
			<div class="row">
				<!-- <div class="col-md-7">
					<p class="contact-action"><i class="fa fa-phone-square"></i>IN CASE OF ANY QUESTIONS, CALL THIS NUMBER: <strong>+565 975 658</strong></p>
				</div> -->
				<div class="col-md-3 clearfix">
					<ul class="login-cart">
						<!-- <li>
							<a data-toggle="modal" data-target="#myModal" href="#">
							<i class="fa fa-user"></i>
								Login
							</a>
						</li> -->
						<li>
							<!-- <div class="cart dropdown">
						  		<a data-toggle="dropdown" href="#"><i class="fa fa-shopping-cart"></i>Cart(1)</a>
					  			<div class="dropdown-menu dropup">
					  				<span class="caret"></span>
						  			<ul class="media-list">
								  		<li class="media">
										    <img class="pull-left" src="images/product-item.jpg" alt="">
										    <div class="media-body">
										      	<h6>Italian Sauce
								    				<span>$250</span>
								    			</h6>
								    		</div>
								  		</li>
									</ul>
									<button class="btn btn-primary btn-sm">Checkout</button>
							    </div> -->
				</div>
				</li>
				</ul>
			</div>
			<div class="col-md-2">
				<div class="search-box">
					<!-- <div class="input-group">
					    	<input placeholder="Search Here" type="text" class="form-control">
					      	<span class="input-group-btn">
					        	<button class="btn btn-default" type="button"></button>
					      	</span>
						</div> -->
					<!-- /.input-group -->
				</div><!-- /.search-box -->
			</div>
		</div> <!-- End Of /.row -->
		</div> <!-- End Of /.Container -->


		<!-- MODAL Start
    	================================================== -->

		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
			aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Introduce Yourself</h4>
					</div>
					<div class="modal-body clearfix">

						<form action="#" method="post" id="create-account_form" class="std">
							<fieldset>
								<h3>Create your account</h3>
								<div class="form_content clearfix">
									<h4>Enter your e-mail address to create an account.</h4>
									<p class="text">
										<label for="email_create">E-mail address</label>
										<span>
											<input placeholder="E-mail address" type="text" id="email_create"
												name="email_create" value="" class="account_input">
										</span>
									</p>
									<p class="submit">
										<button class="btn btn-primary">Create Your Account</button>
									</p>
								</div>
							</fieldset>
						</form>
						<form action="" method="post" id="login_form" class="std">
							<fieldset>
								<h3>Already registered?</h3>
								<div class="form_content clearfix">
									<p class="text">
										<label for="email">E-mail address</label>
										<span><input placeholder="E-mail address" type="text" id="email" name="email"
												value="" class="account_input"></span>
									</p>
									<p class="text">
										<label for="passwd">Password</label>
										<span><input placeholder="Password" type="password" id="passwd" name="passwd"
												value="" class="account_input"></span>
									</p>
									<p class="lost_password">
										<a href="#popab-password-reset" class="popab-password-link">Forgot your
											password?</a>
									</p>
									<p class="submit">
										<button class="btn btn-success">Log in</button>
									</p>
								</div>
							</fieldset>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	</section> <!-- End of /Section -->



	<!-- LOGO Start
    ================================================== -->

	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a href="#">
						<img src="images/logo_santairia.png" style="width: 250px; height: 100px;" alt="logo">
					</a>
				</div> <!-- End of /.col-md-12 -->
			</div> <!-- End of /.row -->
		</div> <!-- End of /.container -->
	</header> <!-- End of /Header -->




	<!-- MENU Start
    ================================================== -->

	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div> <!-- End of /.navbar-header -->

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav nav-main">
					<li><a href="<?php echo DIRPAGE . "/" ?>">Início</a></li>
					<li><a href="<?php echo DIRPAGE . "/about" ?>">Sobre</a></li>
					<!-- <li><a href="blog.html">Produtos</a></li> -->
					<!-- <li><a href="blog-single.html">Contato</a></li> -->
					<li class="dropdown">
						<a href="#">
							Produtos
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo DIRPAGE . "/cachaca" ?>">Cachaça</a></li>
							<li><a href="<?php echo DIRPAGE . "/derivados" ?>">Derivados de Cana-de-Açucar</a></li>
							<li><a href="<?php echo DIRPAGE . "/apicultura" ?>">Apicultura</a></li>
							<li><a href="<?php echo DIRPAGE . "/horta" ?>">Horta Agroecológica</a></li>
							<li><a href="<?php echo DIRPAGE . "/ovos" ?>">Ovos</a></li>
							<li><a href="<?php echo DIRPAGE . "/medicinais" ?>">Plantas Medicinais</a></li>
						</ul>
					</li>
					<li><a href="<?php echo DIRPAGE . "/contato" ?>">Contato</a></li>
					<li><a href="<?php echo DIRPAGE . "/login" ?>">Área Restrita</a></li>
					<!-- End of /.dropdown -->


				</ul> <!-- End of /.nav-main -->
			</div> <!-- /.navbar-collapse -->
		</div> <!-- /.container-fluid -->
	</nav> <!-- End of /.nav -->



	<!-- Breadcrumbs Start
    ================================================== -->

	<section id="topic-header">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h1>Contato</h1>
					<!-- <p>Latest News and Musings</p> -->
				</div> <!-- End of /.col-md-4 -->
				<div class="col-md-8 hidden-xs">
					<ol class="breadcrumb pull-right">
						<!-- <li><a href="#">Início</a></li> -->
						<li><a href="<?php echo DIRPAGE . "/"?>">Início</a></li>
						<li class="active"> Contato</li>
					</ol>
				</div> <!-- End of /.col-md-8 -->
			</div> <!-- End of /.row -->
		</div> <!-- End of /.container -->
	</section> <!-- End of /#Topic-header -->






	<section id="blog">
		<div class="container">
			<div class="row">
				<div class="col-md-9 clearfix">

					<div id="map" class="contact-map">
						<iframe
							src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14776.849231570019!2d-43.3094679!3d-22.1940365!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd184bb29f6ac94c9!2sCacha%C3%A7aria%20Santa%20Iria!5e0!3m2!1spt-BR!2sbr!4v1580504008816!5m2!1spt-BR!2sbr"
							width="1125px" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>

					<div class="leave-comment">
						<h5 style="text-indent: 40px;">ENTRE EM CONTATO CONOSCO!</h5>
						<form method="post" action="<?php echo DIRPAGE . "/submit" ?>" class="form-horizontal"
							role="form">
							<div class="form-group">
								<label for="inputname" class="col-sm-2 control-label">Nome</label>
								<div class="col-sm-10">
									<input type="text" name="name" class="form-control" id="inputname"
										placeholder="Nome">
								</div>
							</div> <!-- End of /.form-group -->
							<div class="form-group">
								<label for="inputEmail" class="col-sm-2 control-label">Telefone</label>
								<div class="col-sm-10">
									<input type="tel" name="phone" class="form-control cel-sp-mask" id="phone"
										placeholder="Telefone">
								</div>

								<script type="text/javascript">
									$("#phone").mask("(00) 00000-0000");
								</script>

							</div> <!-- End of /.form-group -->
							<div class="form-group">
								<label for="inputwebsite" class="col-sm-2 control-label">Email</label>
								<div class="col-sm-10">
									<input type="email" name="email" class="form-control" id="inputwebsite"
										placeholder="Email">
								</div>
							</div> <!-- End of /.form-group -->
							<div class="form-group">
								<label for="inputmessage" class="col-sm-2 control-label">Mensagem</label>
								<div class="col-sm-10">
									<textarea class="form-control" name="message" id="inputmessage"
										placeholder="Mensagem" rows="3"></textarea>
								</div>
							</div> <!-- End of /.form-group -->

							<div class="form-group">
								<div class="col-sm-offset-2 col-md-12">
									<button type="submit" name="enviar" class="btn btn-success">Enviar</button>
								</div>
							</div> <!-- End of /.form-group -->


						</form> <!-- End of /.form-horizontal -->
					</div> <!-- End of /.leave comments -->
				</div> <!-- End of /.col-md-9 -->




			</div> <!-- End of /.col-md-3 -->
		</div> <!-- End of /.row -->
		</div> <!-- End of /.container -->
	</section> <!-- End of /.Section -->



























	<!-- FOOTER Start
    ================================================== -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="block clearfix">
						<a href="#">
							<img src="images/footer-logo.png" style="width: 250px; height: 100px;" alt="logo">
						</a>
						<p>
							<h3>Produtos ecológicos!</h3>
						</p>
						<!-- <h4 class="connect-heading">CONNECT WITH US</h4>
						<ul class="social-icon">
							<li>
								<a class="facebook-icon" href="#">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li>
								<a class="plus-icon" href="#">
									<i class="fa fa-google-plus"></i>
								</a>
							</li>
							<li>
								<a class="twitter-icon" href="#">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a class="pinterest-icon" href="#">
									<i class="fa fa-pinterest"></i>
								</a>
							</li>
							<li>
								<a class="linkedin-icon" href="#">
									<i class="fa fa-linkedin"></i>
								</a>
							</li>
						</ul>	 -->
					</div>
				</div>
				<div class="col-md-4">
					<div class="block">
						<h4>Entre em contato</h4>
						<p> <i class=""></i> <span>Celular: </span> (24) 99905-0016</p>

						<p> <i class=""></i> <span>Email: </span> contato@agrosantairia.com.br</p>
						<!--  
						<p class="mail"><i class="fa  fa-envelope"></i>Eamil: <span>info@sitename.com</span></p> -->
					</div>
				</div>
				<div class="col-md-4">
					<div class="block">
						<!-- <h4>UPCOMING ITEMS</h4>
						<div class="media">
						  	<a class="pull-left" href="#">
						    	<img class="media-object" src="images/product-item.jpg" alt="...">
						  	</a>
						  	<a class="pull-left" href="#">
						    	<img class="media-object" src="images/product-item.jpg" alt="...">
						  	</a>
						  	<a class="pull-left" href="#">
						    	<img class="media-object" src="images/product-item.jpg" alt="...">
						  	</a>
						  	<a class="pull-left" href="#">
						    	<img class="media-object" src="images/product-item.jpg" alt="...">
						  	</a>
						  	<a class="pull-left" href="#">
						    	<img class="media-object" src="images/product-item.jpg" alt="...">
						  	</a>
						  	<a class="pull-left" href="#">
						    	<img class="media-object" src="images/product-item.jpg" alt="...">
						  	</a>
						</div> -->
						<!-- End Of /.media -->
					</div>
					<!-- End Of /.block -->
				</div> <!-- End Of Col-md-3 -->
			</div> <!-- End Of /.row -->
		</div> <!-- End Of /.Container -->



		<!-- FOOTER-BOTTOM Start
    ================================================== -->

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="cash-out pull-left">
							<!-- <li>
								<a href="#">
									<img src="images/American-Express.png" alt="">	
								</a>
							</li>
							<li>
								<a href="#">
									<img src="images/PayPal.png" alt="">	
								</a>
							</li>
							<li>
								<a href="#">
									<img src="images/Maestro.png" alt="">	
								</a>
							</li>
							<li>
								<a href="#">
									<img src="images/Visa.png" alt="">	
								</a>
							</li>
							<li>
								<a href="#">
									<img src="images/Visa-Electron.png" alt="">	
								</a>
							</li> -->
						</ul>
						<p class="copyright-text pull-right">Agro Santa Iria @2019 Designed by <a
								href="http://www.themexpert.com">Themexpert</a> All Rights Reserved</p>
					</div> <!-- End Of /.col-md-12 -->
				</div> <!-- End Of /.row -->
			</div> <!-- End Of /.container -->
		</div> <!-- End Of /.footer-bottom -->
	</footer> <!-- End Of Footer -->

	<a id="back-top" href="#"></a>

</body>


</html>