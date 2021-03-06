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
						<a href="">
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
						<center>Cacha??a</center>
					</h1>
				</div>
				<div class="col-md-4 hidden-xs">
					<ol class="breadcrumb pull-right">
						<li><a href="<?php echo DIRPAGE . "/" ?>">In??cio</a></li>
						<li class="active">Cacha??a</li>
					</ol>
				</div>
			</div>
		</div>
	</section>





	<section id="shop">
		<div class="container">
			<div class="row">

				<div class="col-md-9 clearfix">
					<ul class="blog-zone">
						<li>

							<p>

								<h5 style="text-indent: 20px;">Sobre:</h5>
								<p align=justify style="text-indent:20px">
									A cacha??a ?? obtida atrav??s do mosto fermentado e destilado da
									cana-de-a????car.
								</p>
								<p align=justify style="text-indent:20px">
									A cacha??a tem que possuir um teor alco??lico de 38 a 54% (v/v) a
									20??C, podendo ser adicionado no m??ximo 6g/L de a????cares. Este
									??lcool tem que ser proveniente do destilado alco??lico simples de
									cana de a????car, ou pela destila????o do mosto fermentado de cana-
									de-a????car. Por isso, ?? enquadrada como bebida destilo-retificada ou
									fermento-destilada. Difere dos destilados alco??licos simples que s??o
									os destilados com 55 - 85% V/V em ??lcool, obtidos pela destila????o
									de mostos fermentados e constituem aguardentes fortes, n??o
									pot??veis.
								</p>


								<h5 style="text-indent: 20px;">Etapas do Processo:</h5>
								<p>
									Um dos ingredientes b??sicos de mais import??ncia ?? a ??gua empregada no processo.
								</p>
								<p align=justify style="text-indent:20px">
									<h6>1. Moagem</h6>
									A moagem tem como objetivo final extrair o caldo e recuperar o a????car que est??
									dissolvido nos
									tecidos de reserva ou c??lulas parenquimatosas dos colmos de cana de a????car. O
									processo de
									extra????o do caldo ?? um dos fatores mais importantes que governam o rendimento do
									processo
									produtivo.
									A extra????o ?? feita atrav??s de moendas, que s??o constitu??das por cilindros ou rolos e
									a bagaceira que
									?? colocada entre os rolos para conduzir o baga??o entre o primeiro e o segundo
									esmagamento. Esse
									maquin??rio pode ser movido por motores el??tricos, diesel, vapor ou otimizada. ??
									importante que a
									m??quina tenha um dispositivo para controlar a press??o, caso contr??rio, haver??
									ruptura do cilindro,
									ocorrendo um excesso de alimenta????o ou ainda a presen??a de metais e pedras que
									acompanham a
									mat??ria-prima.
									Para que o processo de extra????o tenha a sua maior efici??ncia ?? necess??rio que se
									tenha um preparo
									da cana, uma embebi????o e um coamento, e decanta????o do caldo.
								</p>

								<p align=justify style="text-indent:20px">
									<h6>1.1. Prepara????o da Cana</h6>
									A finalidade desta etapa ?? destruir a resist??ncia das partes duras dos colmos de
									cana, aumentando a
									capacidade de trabalho. Ela consiste na desintegra????o dos colmos, objetivando romper
									o maior
									n??mero de feixes fibrovasculares, onde est??o as c??lulas de armazenamento.
								</p>


								<p align=justify style="text-indent:20px">
									<h6>1.2. Embebi????o</h6>
									Para conseguir uma maior quantidade de caldo extra??do o baga??o ?? passado v??rias
									vezes pelas
									moendas. Ap??s certo limite, a extra????o de caldo seco torna-se nula. Ent??o faz-se
									necess??rio a
									realiza????o de lavagem deste res??duo em processo com ??gua ou uma mistura de ??gua mais
									caldo,
									com a finalidade de diluir o caldo remanescente.
									Esse processo de lavagem ?? chamado de embebi????o. Quando a extra????o possui esta etapa
									a
									extra????o de sacarose que seria de 85% no m??ximo chega a 92% em muitos casos.
									A embebi????o pode ser simples, dupla, tripla, etc, dependendo do n??mero de vezes que
									?? realizada.
									Considerando-se o l??quido empregado para a lavagem do baga??o ela pode ser simples
									quando ??
									utilizado apenas ??gua e composto quando ?? utilizada a mistura ??gua+caldo. Essa etapa
									da ?? feita
									atrav??s de tubos perfurados (pressurizados) ou calhas localizadas sobre os
									condutores
									intermedi??rios, logo ap??s a sa??da das moendas, quando baga??o comprimido est??
									iniciando sua
									expans??o.
								</p>

								<p align=justify style="text-indent:20px">
									<h6>1.3. Coamento e Decanta????o do Caldo</h6>
									Esta etapa ?? a respons??vel pela retirada das impurezas ou bagacilho provenientes da
									extra????o do
									caldo. A sua separa????o ?? importante porque ?? uma fonte de contamina????o e pode
									promover
									rea????es indesejadas que degradem a qualidade do produto final. A separa????o pode ser
									realizada
									atrav??s de peneiras fixas, rotativas ou vibrat??rias. Em alguns estabelecimentos h??
									tamb??m a
									utiliza????o de coadores fixos, normalmente de n??ilon. Ap??s a passagem do caldo pelas
									peneiras, o
									mesmo vai para um decantador. Este decantador ?? constitu??do por um tanque inclinado,
									para
									facilitar a drenagem da ??gua de lavagem, e deve ser dimensionado para que o tempo de
									passagem
									do caldo seja curto para que se evite ponto de inocula????o ou multiplicadores de
									contaminantes.
								</p>

								<p align=justify style="text-indent:20px">
									<h6>2. Preparo e Corre????o do Mosto</h6>
									O caldo puro extra??do da cana de a????car est?? numa concentra????o t??o elevada de teor
									de a????car, que
									n??o atende as exig??ncias das leveduras alco??licas (concentra????o de a????car na faixa
									de 14 a 16 Brix).
									Para que as leveduras possam atuar ?? necess??rio que haja a dilui????o desse caldo,
									conhecido como
									mosto. O Mosto, ent??o, ?? o caldo a??ucarado dilu??do que est?? apto a sofrer
									fermenta????o.
									F??sforo, nitrog??nio, pot??ssio entre outros nutrientes devem estar presentes em
									quantidades
									necess??rias para metabolismo ??timo da a????o do fermento. Logo, tamb??m podem ser
									adicionados ao

									mosto quando suas quantidades forem detectadas como insuficientes para melhor
									produ????o de
									??lcool.
									Os sais minerais como magn??sio, mangan??s e cobalto favorecem as rea????es enzim??ticas
									da
									fermenta????o alco??lica. O caldo de cana j?? possui quantidades suficientes sendo
									dispens??vel sua
									adi????o.
								</p>

								<p align=justify style="text-indent:20px">
									<h6>3. Fermentos</h6>
									Conhecido tamb??m como p??-de-cuba, p??-de-fermenta????o ou levedo alco??lico, o fermento
									?? a
									suspens??o de c??lulas de leveduras, suficientemente concentradas (2-5 cel/mL), de
									modo a garantir a
									fermenta????o de um volume de mosto economicamente rent??vel. Ou seja, a transforma????o
									do
									a????car em ??lcool, o principal componente da cacha??a.
								</p>

								<p align=justify style="text-indent:20px">
									<h6>4. Fermenta????o</h6>
									Fermenta????o ?? todo fen??meno causado por microrganismos vivos, sejam bact??rias,
									fungos ou
									leveduras, que decomp??em e transformam o substrato.
									Este desdobramento resulta em produtos variados, dependendo da composi????o do
									substrato e dos
									microrganismos presentes. No caso espec??fico da convers??o da sacarose em etanol pela
									levedura ??
									realizada por uma via denominada cientificamente Embden-Meyerhoff-Parnas.
									Completa-se a fermenta????o alco??lica, a superf??cie do vinho fica tranq??ila e limpa de
									espumas, sendo
									ent??o considerada conclu??da.
								</p>

								<p align=justify style="text-indent:20px">
									<h6>5. Destila????o</h6>
									Na produ????o artesanal de cacha??a a destila????o ?? realizada em alambiques de cobre; j??
									na produ????o
									industrial a destila????o ?? feita em colunas de destila????o.
									A cacha??a Santa Iria ?? totalmente artesanal, agroecol??gica e de produ????o limitada.
									Destila apenas
									1200 litros por ano. A diferen??a de uma cacha??a artesanal para uma industrial ?? que
									com a
									industrializa????o do processo ?? gerado um produto padronizado, de baixa qualidade, de
									grande
									volume e baixo valor agregado.
									J?? a Cacha??a artesanal conta com um processo meticuloso no manejo da mat??ria prima,
									na moenda,
									na separa????o de impurezas. Tudo com intuito de melhorar a qualidade final do
									produto.
									A princ??pio o destilado apresenta elevada gradua????o alco??lica (65-70% V/V) e com o
									decorrer da
									destila????o essa quantidade ?? reduzida. ?? recomendado a separa????o e 5 a 10% do volume
									da cacha??a
									da destila????o inicial, conhecida com fra????o cabe??a e que ?? rica em ??steres,
									alde??dos, acetalde??dos,
									metanol, acetato de etila e outros componentes vol??teis.
									A seguir ?? separada a fra????o cora????o, que ?? rica em etanol al??m da ??lcoois
									superiores, ??cidos
									vol??teis e outros produtos da fermenta????o ou dentro do alambique. Representa 80% do
									destilado e
									?? a cacha??a. Na pr??tica ?? comum efetuar o ???corte??? quando a gradua????o do flegam
									estiver em torno
									de 45-50% V/V.
									A ??ltima fra????o retirada ?? a fra????o cauda ou ??gua-fraca, correspondente a 10% do
									destilado e
									constitu??da por produto mais pesados, menos vol??teis que o etanol e com maior
									afinidade pela
									??gua. ?? a fra????o rica em componentes indesej??veis (furfural, ??cido ac??tico, ??lcoois
									superiores, etc.)
									com gradua????o alco??lica de 38% V/V a 10%V/V. Essa fra????o pode ser adiciona ao vinho
									a ser
									destilado para aumentar seu rendimento.

									A vinha??a, que ?? a fra????o residual que sobra dentro do alambique deve ser recolhida
									e aplicada na
									lavoura.
								</p>

								<h5 style="text-indent: 20px;">Curiosidades:</h5>
								<p align=justify style="text-indent:20px">
									A dor de cabe??a e p?? inchado vem da qualidade da destilaria.
									A cacha??a branca n??o quer dizer que n??o seja envelhecida. Ela
									pode ser envelhecida em barril de a??o.
								</p>
								<p align=justify style="text-indent:20px">
									A cacha??a Santa Iria ?? totalmente artesanal, agroecol??gica e de
									produ????o limitada. A diferen??a de uma cacha??a artesanal para uma
									industrial ?? que com a industrializa????o do processo ?? gerado um produto
									padronizado, de baixa qualidade, de grande volume e baixo valor
									agregado.
								</p>

								<p align=justify style="text-indent:20px">
									J?? a Cacha??a artesanal conta com um processo meticuloso no
									manejo da mat??ria prima, na moenda, na separa????o de impurezas.
									Tudo com intuito de melhorar a qualidade final do produto.
								</p>


							</p>
							</palign=justify>

							<section id="slider-area">
								<div class="container">
									<div class="row">
										<div class="col-md-12">
											<div id="slider" class="nivoSlider">

												<img src="images/cachaca.jpg" alt="" />

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