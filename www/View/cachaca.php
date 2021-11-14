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
					<li><a href="<?php echo DIRPAGE . "/" ?>">Início</a></li>
					<li><a href="<?php echo DIRPAGE . "/about" ?>">Sobre</a></li>
					<!-- <li><a href="blog.html">Produtos</a></li> -->
					<!-- <li><a href="blog-single.html">Contato</a></li> -->
					<li class="dropdown active">
						<a href="">
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
				<div class="col-md-8">
					<h1 style="text-indent:10%;">
						<center>Cachaça</center>
					</h1>
				</div>
				<div class="col-md-4 hidden-xs">
					<ol class="breadcrumb pull-right">
						<li><a href="<?php echo DIRPAGE . "/" ?>">Início</a></li>
						<li class="active">Cachaça</li>
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
									A cachaça é obtida através do mosto fermentado e destilado da
									cana-de-açúcar.
								</p>
								<p align=justify style="text-indent:20px">
									A cachaça tem que possuir um teor alcoólico de 38 a 54% (v/v) a
									20°C, podendo ser adicionado no máximo 6g/L de açúcares. Este
									álcool tem que ser proveniente do destilado alcoólico simples de
									cana de açúcar, ou pela destilação do mosto fermentado de cana-
									de-açúcar. Por isso, é enquadrada como bebida destilo-retificada ou
									fermento-destilada. Difere dos destilados alcoólicos simples que são
									os destilados com 55 - 85% V/V em álcool, obtidos pela destilação
									de mostos fermentados e constituem aguardentes fortes, não
									potáveis.
								</p>


								<h5 style="text-indent: 20px;">Etapas do Processo:</h5>
								<p>
									Um dos ingredientes básicos de mais importância é a água empregada no processo.
								</p>
								<p align=justify style="text-indent:20px">
									<h6>1. Moagem</h6>
									A moagem tem como objetivo final extrair o caldo e recuperar o açúcar que está
									dissolvido nos
									tecidos de reserva ou células parenquimatosas dos colmos de cana de açúcar. O
									processo de
									extração do caldo é um dos fatores mais importantes que governam o rendimento do
									processo
									produtivo.
									A extração é feita através de moendas, que são constituídas por cilindros ou rolos e
									a bagaceira que
									é colocada entre os rolos para conduzir o bagaço entre o primeiro e o segundo
									esmagamento. Esse
									maquinário pode ser movido por motores elétricos, diesel, vapor ou otimizada. É
									importante que a
									máquina tenha um dispositivo para controlar a pressão, caso contrário, haverá
									ruptura do cilindro,
									ocorrendo um excesso de alimentação ou ainda a presença de metais e pedras que
									acompanham a
									matéria-prima.
									Para que o processo de extração tenha a sua maior eficiência é necessário que se
									tenha um preparo
									da cana, uma embebição e um coamento, e decantação do caldo.
								</p>

								<p align=justify style="text-indent:20px">
									<h6>1.1. Preparação da Cana</h6>
									A finalidade desta etapa é destruir a resistência das partes duras dos colmos de
									cana, aumentando a
									capacidade de trabalho. Ela consiste na desintegração dos colmos, objetivando romper
									o maior
									número de feixes fibrovasculares, onde estão as células de armazenamento.
								</p>


								<p align=justify style="text-indent:20px">
									<h6>1.2. Embebição</h6>
									Para conseguir uma maior quantidade de caldo extraído o bagaço é passado várias
									vezes pelas
									moendas. Após certo limite, a extração de caldo seco torna-se nula. Então faz-se
									necessário a
									realização de lavagem deste resíduo em processo com água ou uma mistura de água mais
									caldo,
									com a finalidade de diluir o caldo remanescente.
									Esse processo de lavagem é chamado de embebição. Quando a extração possui esta etapa
									a
									extração de sacarose que seria de 85% no máximo chega a 92% em muitos casos.
									A embebição pode ser simples, dupla, tripla, etc, dependendo do número de vezes que
									é realizada.
									Considerando-se o líquido empregado para a lavagem do bagaço ela pode ser simples
									quando é
									utilizado apenas água e composto quando é utilizada a mistura água+caldo. Essa etapa
									da é feita
									através de tubos perfurados (pressurizados) ou calhas localizadas sobre os
									condutores
									intermediários, logo após a saída das moendas, quando bagaço comprimido está
									iniciando sua
									expansão.
								</p>

								<p align=justify style="text-indent:20px">
									<h6>1.3. Coamento e Decantação do Caldo</h6>
									Esta etapa é a responsável pela retirada das impurezas ou bagacilho provenientes da
									extração do
									caldo. A sua separação é importante porque é uma fonte de contaminação e pode
									promover
									reações indesejadas que degradem a qualidade do produto final. A separação pode ser
									realizada
									através de peneiras fixas, rotativas ou vibratórias. Em alguns estabelecimentos há
									também a
									utilização de coadores fixos, normalmente de náilon. Após a passagem do caldo pelas
									peneiras, o
									mesmo vai para um decantador. Este decantador é constituído por um tanque inclinado,
									para
									facilitar a drenagem da água de lavagem, e deve ser dimensionado para que o tempo de
									passagem
									do caldo seja curto para que se evite ponto de inoculação ou multiplicadores de
									contaminantes.
								</p>

								<p align=justify style="text-indent:20px">
									<h6>2. Preparo e Correção do Mosto</h6>
									O caldo puro extraído da cana de açúcar está numa concentração tão elevada de teor
									de açúcar, que
									não atende as exigências das leveduras alcoólicas (concentração de açúcar na faixa
									de 14 a 16 Brix).
									Para que as leveduras possam atuar é necessário que haja a diluição desse caldo,
									conhecido como
									mosto. O Mosto, então, é o caldo açucarado diluído que está apto a sofrer
									fermentação.
									Fósforo, nitrogênio, potássio entre outros nutrientes devem estar presentes em
									quantidades
									necessárias para metabolismo ótimo da ação do fermento. Logo, também podem ser
									adicionados ao

									mosto quando suas quantidades forem detectadas como insuficientes para melhor
									produção de
									álcool.
									Os sais minerais como magnésio, manganês e cobalto favorecem as reações enzimáticas
									da
									fermentação alcoólica. O caldo de cana já possui quantidades suficientes sendo
									dispensável sua
									adição.
								</p>

								<p align=justify style="text-indent:20px">
									<h6>3. Fermentos</h6>
									Conhecido também como pé-de-cuba, pé-de-fermentação ou levedo alcoólico, o fermento
									é a
									suspensão de células de leveduras, suficientemente concentradas (2-5 cel/mL), de
									modo a garantir a
									fermentação de um volume de mosto economicamente rentável. Ou seja, a transformação
									do
									açúcar em álcool, o principal componente da cachaça.
								</p>

								<p align=justify style="text-indent:20px">
									<h6>4. Fermentação</h6>
									Fermentação é todo fenômeno causado por microrganismos vivos, sejam bactérias,
									fungos ou
									leveduras, que decompõem e transformam o substrato.
									Este desdobramento resulta em produtos variados, dependendo da composição do
									substrato e dos
									microrganismos presentes. No caso específico da conversão da sacarose em etanol pela
									levedura é
									realizada por uma via denominada cientificamente Embden-Meyerhoff-Parnas.
									Completa-se a fermentação alcoólica, a superfície do vinho fica tranqüila e limpa de
									espumas, sendo
									então considerada concluída.
								</p>

								<p align=justify style="text-indent:20px">
									<h6>5. Destilação</h6>
									Na produção artesanal de cachaça a destilação é realizada em alambiques de cobre; já
									na produção
									industrial a destilação é feita em colunas de destilação.
									A cachaça Santa Iria é totalmente artesanal, agroecológica e de produção limitada.
									Destila apenas
									1200 litros por ano. A diferença de uma cachaça artesanal para uma industrial é que
									com a
									industrialização do processo é gerado um produto padronizado, de baixa qualidade, de
									grande
									volume e baixo valor agregado.
									Já a Cachaça artesanal conta com um processo meticuloso no manejo da matéria prima,
									na moenda,
									na separação de impurezas. Tudo com intuito de melhorar a qualidade final do
									produto.
									A princípio o destilado apresenta elevada graduação alcoólica (65-70% V/V) e com o
									decorrer da
									destilação essa quantidade é reduzida. É recomendado a separação e 5 a 10% do volume
									da cachaça
									da destilação inicial, conhecida com fração cabeça e que é rica em ésteres,
									aldeídos, acetaldeídos,
									metanol, acetato de etila e outros componentes voláteis.
									A seguir é separada a fração coração, que é rica em etanol além da álcoois
									superiores, ácidos
									voláteis e outros produtos da fermentação ou dentro do alambique. Representa 80% do
									destilado e
									é a cachaça. Na prática é comum efetuar o ‘corte’ quando a graduação do flegam
									estiver em torno
									de 45-50% V/V.
									A última fração retirada é a fração cauda ou água-fraca, correspondente a 10% do
									destilado e
									constituída por produto mais pesados, menos voláteis que o etanol e com maior
									afinidade pela
									água. É a fração rica em componentes indesejáveis (furfural, ácido acético, álcoois
									superiores, etc.)
									com graduação alcoólica de 38% V/V a 10%V/V. Essa fração pode ser adiciona ao vinho
									a ser
									destilado para aumentar seu rendimento.

									A vinhaça, que é a fração residual que sobra dentro do alambique deve ser recolhida
									e aplicada na
									lavoura.
								</p>

								<h5 style="text-indent: 20px;">Curiosidades:</h5>
								<p align=justify style="text-indent:20px">
									A dor de cabeça e pé inchado vem da qualidade da destilaria.
									A cachaça branca não quer dizer que não seja envelhecida. Ela
									pode ser envelhecida em barril de aço.
								</p>
								<p align=justify style="text-indent:20px">
									A cachaça Santa Iria é totalmente artesanal, agroecológica e de
									produção limitada. A diferença de uma cachaça artesanal para uma
									industrial é que com a industrialização do processo é gerado um produto
									padronizado, de baixa qualidade, de grande volume e baixo valor
									agregado.
								</p>

								<p align=justify style="text-indent:20px">
									Já a Cachaça artesanal conta com um processo meticuloso no
									manejo da matéria prima, na moenda, na separação de impurezas.
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