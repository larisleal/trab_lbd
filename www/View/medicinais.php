<!doctype html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<title>Agro Santa Iria</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- PRODUTOS -->

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>

	<!-- Css -->
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" />
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">

	<!-- jS -->
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
	<script src="js/owl.carousel.min.js" type="text/javascript"></script>
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/main.js" type="text/javascript"></script>


</head>

<body>


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
					<li><a href="<?php echo DIRPAGE . "/" ?>">In??cio</a></li>
					<li><a href="<?php echo DIRPAGE . "/about" ?>">Sobre</a></li>
					<!-- <li><a href="blog.html">Produtos</a></li> -->
					<!-- <li><a href="blog-single.html">Contato</a></li> -->
					<li class="dropdown active">
						<a href="#">
							Produtos
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo DIRPAGE . "/cachaca" ?>">Cacha??a</a></li>
							<li><a href="<?php echo DIRPAGE . "/derivados" ?>">Derivados de Cana-de-A??ucar</a></li>
							<li><a href="<?php echo DIRPAGE . "/apicultura" ?>">Apicultura</a></li>
							<li><a href="<?php echo DIRPAGE . "/horta" ?>">Horta Agroecol??gica</a></li>
							<li><a href="<?php echo DIRPAGE . "/ovos" ?>">Ovos</a></li>
							<li><a href="<?php echo DIRPAGE . "/medicinais" ?>">Plantas Medicinais</a></li>
						</ul>
					</li>
					<li><a href="<?php echo DIRPAGE . "/contato" ?>">Contato</a></li>
					<li><a href="<?php echo DIRPAGE . "/login" ?>">??rea Restrita</a></li>
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
				<div class="col-md-8">
					<h1 style="text-indent:10%;">
						<center>Plantas Medicinais</center>
					</h1>
				</div> <!-- End of /.col-md-4 -->
				<div class="col-md-4 hidden-xs">
					<ol class="breadcrumb pull-right">
						<li><a href="<?php echo DIRPAGE . "/" ?>">In??cio</a></li>
						<li class="active">Plantas Medicinais</li>
					</ol>
				</div> <!-- End of /.col-md-8 -->
			</div> <!-- End of /.row -->
		</div> <!-- End of /.container -->
	</section> <!-- End of /#Topic-header -->





	<section id="shop">
		<div class="container">
			<div class="row">

				<div class="col-md-9 clearfix">
					<ul class="blog-zone">
						<li>

							<p>

								<p align=justify style="text-indent: 20px;">
									Em todo o mundo, cresce a preocupa????o com o meio ambiente e a busca por produtos com
									ingredientes naturais obtidos de maneira sustent??vel. Essa busca estende-se a v??rias
									??reas como
									alimentos, medicamentos, cosm??ticos e outros. As plantas medicinais, arom??ticas e
									condimentares
									formam um grupo de esp??cies que tem sido alvo constante desse interesse.

								</p>

								<p align=justify style="text-indent: 20px;">
									Os resultados das pesquisas que comprovam cientificamente o efeito terap??utico de
									plantas
									medicinais j?? utilizadas pela pr??pria popula????o referendam o uso de nossos recursos
									naturais e de
									esp??cies ex??ticas e ajudam a enfrentar os elevados pre??os dos medicamentos e a
									depend??ncia
									externa nesta ??rea oferecendo uma op????o terap??utica.
								</p>


								<h5 style="text-indent: 20px;">Neem Indiano</h5>
								<p align=justify style="text-indent: 20px;">
									O Neem indiano, tamb??m conhecido como amargosa ?? uma arvore
									originaria da ??ndia, j?? em cultivo no Brasil, com reconhecidas propriedades
									medicinais, sendo, por??m, na agricultura, utilizada para controle de pragas
									e doen??as.
								</p>



							</p>
							</palign=justify>

							<section id="slider-area">
								<div class="container">
									<div class="row">
										<div class="col-md-12">
											<div id="slider" class="nivoSlider">
												<img src="images/planta-medicinal.jpg" alt="" />

											</div>
										</div>
									</div>
								</div>
							</section>



						</li>
					</ul>
				</div>


			</div>
		</div>
	</section>





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
							<h3>Produtos ecol??gicos!</h3>
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

						<p> <i class=""></i> <span>Email: </span>contato@agrosantairia.com.br</p>
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