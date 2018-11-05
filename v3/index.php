<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Plaza Canela Brasil</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Site oficial plaza canela brasil parceira da CommandInvest" />
	<meta name="keywords" content="Plaza Canela Brasil, CommandInvest, hotel, Rede Plaza Hotéis, investimento, condo-hotel" />
	<meta name="author" content="TI CommandInvest" />

	<link rel="shortcut icon" href="./images/commandinvest_icone.png">

	<!-- <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet"> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<!-- Google Icons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<script>
		setTimeout(function() {
			const el = document.getElementsByClassName('js-gtco-nav-toggle')
			if (el[0])
				el[0].style.display = 'none'
		}, 1000);
	</script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126426371-4"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-126426371-4');

		let isOpen = false;
	</script>

    <!-- Smartsupp Live Chat script -->
    <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = 'f1373cdf7909677323fca61f316709add56923ee';
        window.smartsupp||(function(d) {
            var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
            s=d.getElementsByTagName('script')[0];c=d.createElement('script');
            c.type='text/javascript';c.charset='utf-8';c.async=true;c.src='https://www.smartsuppchat.com/loader.js?';
			c.addEventListener('load', function() {
				const iframeDocument = document.querySelector('iframe').contentDocument;
				(function verify() {
					if (iframeDocument.getElementById('widgetPanel') === null) {
						setTimeout(verify, 500);
					} else {
						iframeDocument.getElementById('widgetPanel').addEventListener('click', function() {
							if(!isOpen) {
								gtag('event', 'chat', {
									'event_label' : 'opened',
									'value': 'true'
								});
								isOpen = true;
							}
						});
					}
				})()
			});
			s.parentNode.insertBefore(c,s);
        })(document);
    </script>

    <style>
        nav {
            position: fixed !important;
            background: linear-gradient(to right, rgba(200, 200, 200, 0.7), rgba(0, 0, 0, 0.7));
        }
	    #gtco-logo img {
		    height: 50px;
		    transition: linear 0.5s;
		}
		.gtco-nav ul li a {
			text-transform: uppercase;
			font-weight: bold;
		}
        .large {
            line-height: 5;
        }
        @media screen and (max-width: 768px) {
            .large {
                line-height: 1.7;
            }
        }
    	#gtco-features .icon {
    		width: 120px;
    		height: 120px;
    	}
    	#gtco-features .icon .material-icons {
    		font-size: 55px;
    	}
    	.icon img {
    		display: block;
    		width: 50%;
		    margin: -25px auto 0 auto;
    	}
    	.gtco-flex {
    		float: initial;
    	}
    	#gtco-features-3 {
    		margin-top: 75px;
    	}
    	#gtco-features-3 .feature .icon {
    		display: inline;
    	}
    	.gtco-image {
    		width: 100%;
    		display: block;
    		margin: 15px auto;
    	}
    	.gtco-cover .overlay {
    		background: rgba(0, 0, 0, 0.5);
    	}
    	/*.gtco-nav .gtco-contact ul li:nth-child(1) {
    		color:  #bda369;
		    font-weight: bold;
		    padding: 30px 10px;
		    font-size: 20px;
    	}*/
        #gtco-header .display-tc, .gtco-cover .display-tc {
            vertical-align: top;
            padding-top: 125px;
        }
    	.gtco-nav .gtco-contact ul li a i, 
    	.feature-center .icon i, a, 
    	.gtco-social-icons li a, 
    	.gototop a, a:focus {
    		color: #bda369;
    	}
        .gototop a:hover {
    		color: #fff;
        }
    	.gtco-nav .gtco-contact ul li a {
    		font-size: 20px;
    	}
    	#gtco-features-3 {
    		padding-top: 100px;
    	}
    	#gtco-features-3 .feature, 
    	#gtco-features-3 .feature.feature-2:before, 
    	#gtco-features-3 .feature.feature-2:after, 
    	.gtco-heading h2:before,
    	.btn {
    		background-color: #bda369 !important;
    	}
        .btn {
            border: none !important;
            box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.2), 0 1px 5px 0 rgba(0,0,0,.12);
        }
        .btn:hover, .btn:active, .btn:focus {
            color: #bda369;
            background-color: #fff !important;
            border: none !important;
            box-shadow: 0 4px 5px 0 rgba(0,0,0,.14), 0 1px 10px 0 rgba(0,0,0,.12), 0 2px 4px -1px rgba(0,0,0,.2) !important;
        }
    	a:hover, .gtco-social-icons li a:hover {
    		color: #000;
    	}
    	.owl-theme .owl-controls .owl-nav [class*="owl-"] i, .owl-theme .owl-controls .owl-nav [class*="owl-"] i:hover {
    		background-color: #bda369 !important;
    	}
    	.owl-theme .owl-controls .owl-nav [class*=owl-]:hover {
    		color: #000;
    	}
    	.owl-theme .owl-dots .owl-dot span {
    		background-color: #bda369;
    	}
    	.owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span {
    		border-color: #bda369;
    	}
    	.btn-white.btn-outline:active {
    		color: #fff;
    		border: 2px solid #fff;
    	}
    	.btn-white:active {
    		background: none !important;
    	}
    	#gtco-footer {
    		padding-bottom: 50px;
    	}
    	#gtco-footer img {
    		margin-bottom: 15px;
    	}
    	.owl-carousel .owl-stage-outer {
    		overflow: initial;
    	}
    	#gtco-products .gtco-container .row {
    		overflow: hidden;
    	}
    	.owl-theme .owl-dots {
    		position: initial;
    	}
        .gtco-nav ul li a:focus {
            color: rgba(255, 255, 255, 0.5);
        }
    </style>
	</head>
	<body>
	<div class="gtco-loader"></div>
	
	<div id="page">
		<a href="#" class="js-gtco-nav-toggle gtco-nav-toggle gtco-nav-white"><i></i></a>
		<div id="gtco-offcanvas">
			<ul>
				<li class="active"><a href="#gtco-header">Início</a></li>
				<li><a href="#gtco-plaza">Investimento</a></li>
				<li><a href="#gtco-features">Canela</a></li>
				<li><a href="#gtco-portfolio">Turismo</a></li>
				<li><a href="#gtco-hotel">Empreendimento</a></li>
				<li><a href="#gtco-products">Galeria</a></li>
				<li><a href="#gtco-subscribe">Contato</a></li>
			</ul>
      	</div>
		<nav class="gtco-nav large" role="navigation">
			<div class="gtco-container">
				<!--div class="row">
					<div class="col-md-12 text-right gtco-contact">
						<ul class="">
							<li><i class="icon-phone"></i> (51) 3228.0083</li>
							<li><a href="#gtco-subscribe"><i class="icon-mail2"></i></a></li>
							<li><a target="_blank" href="https://pt-br.facebook.com/commandinvest/"><i class="ti-facebook"></i></a></li>
							<li><a target="_blank" href="https://www.linkedin.com/company/commandinvestoficial"><i class="ti-linkedin"></i></a></li>
							<li><a target="_blank" href="https://join.skype.com/invite/HaomOtLiBGbl"><i class="ti-skype"></i></a></li>
							<li><a target="_blank" href="https://twitter.com/commandinvest"><i class="ti-twitter-alt"></i> </a></li>
						</ul>
					</div>
				</div-->
				<div class="row">
					<div class="col-sm-2 col-xs-12">
						<div id="gtco-logo">
							<a a-event="click,redirect,intern,CommandInvest" href="http://commandinvest.com"><img src="images/logo_header.png" alt="Logo CommandInvest"></a>
						</div>
					</div>
					<div class="col-sm-10 col-xs-12 text-right menu-1">
						<ul>
							<li class="active"><a href="#gtco-header">Início</a></li>
							<li><a href="#gtco-plaza">Investimento</a></li>
							<li><a href="#gtco-features">Canela</a></li>
							<li><a href="#gtco-portfolio">Turismo</a></li>
							<li><a href="#gtco-hotel">Empreendimento</a></li>
							<li><a href="#gtco-products">Galeria</a></li>
							<li><a href="#gtco-subscribe">Contato</a></li>
						</ul>
					</div>
				</div>
			</div>
		</nav>

		<header id="gtco-header" class="gtco-cover scrollspy" role="banner" style="background-image: url(images/plaza_canela_1.jpg);">
			<div class="overlay"></div>
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-12 col-md-offset-0 text-left">
						<div class="display-t">
							<div class="display-tc">
								<img class="col-xs-12 col-md-8 col-md-offset-2" src="./images/logo_plaza_circular.png" alt="Logo Plaza Canela">
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div id="gtco-plaza" class="gtco-section scrollspy">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
						<h2>Porque Investir na Rede Hoteleira Administrada pela Bandeira Plaza?</h2>
						<p>O nosso modelo de locação remunerada apresenta-se como uma modalidade de investimento segura e confortável, isso porquê, uma vez adquirida a unidade, o proprietário não precisa preocupar-se com vacância, reformas, contratos e outras incumbências administrativas.</p>
					</div>
					<div class="col-md-12 col-md-offset- text-center gtco-heading animate-box">
						<img class="gtco-image" src="images/investimento.png" alt="">
					</div>
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
						<p>A segurança do mercado imobiliário aliada a rentabilidade do mercado do turismo em um único investimento.</p>
					</div>
					<div class="col-md-12 col-md-offset- text-center gtco-heading animate-box">
						<img class="gtco-image" src="images/plaza.png" alt="">
					</div>
				</div>
			</div>
		</div>

		<div id="gtco-features" class="scrollspy">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-12 gtco-heading text-center animate-box">
						<h2>O Maior Lançamento da Serra Gaúcha!</h2>
						<div class="col-md-4 col-xs-12">
                            Localiza-se na Serra Gaúcha, mais precisamente na Região das Hortênsias, faz divisa com as cidades de Gramado, São Francisco de Paula, Caxias do Sul e Três Coroas. A cidade é conhecida por atrações turísticas como a Cascata do Caracol, o Parque da Ferradura e a Catedral de Pedra. Um dos mais importantes destinos turísticos do Rio Grande do Sul.
                            <br>
                            <!--a href="./apresentacao_plaza_canela.pdf" download class="btn btn-primary btn-lg">Apresentação Executiva</a-->
                        </div>

						<div class="col-md-7 col-md-offset-1 col-xs-12 col-xs-offset-0">
                  	        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3477.2415777489655!2d-50.82123488441093!3d-29.36321500688642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95192dbb855c545b%3A0xc62bd2e3f69b4fad!2sR.+Danton+Corr%C3%AAa+da+Silva%2C+563+-+Q.ta+da+Serra%2C+Canela+-+RS%2C+95680-000!5e0!3m2!1spt-BR!2sbr!4v1538683658658" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
							<span class="icon">
								<i class="material-icons">&#xE412;</i>
							</span>
							<p>Um dos</p>
							<h3>destinos turísticos</h3>
							<p>mais procurados do Rio Grande do Sul.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
							<span class="icon">
								<i class="material-icons">&#xE539;</i>
							</span>
							<p>Conquistou o</p>
							<h3>1° Lugar</h3>
							<p>entre os 25 destinos mais procurados no site Trivago em 2017.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
							<span class="icon">
								<i class="material-icons">&#xE8F9;</i>
							</span>
							<p>Estadia média de</p>
							<h3>4,57 dias.</h3>
							<p>Justificada pelos atrativos, belezas naturais e excelentes hotéis da região.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
							<span class="icon">
								<i class="material-icons">&#xE53A;</i>
							</span>
							<p>Ocupação de</p>
							<h3>95%</h3>
							<p>da rede hoteleira no mês de dezembro de 2016.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="gtco-portfolio" class="gtco-section scrollspy">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
						<h2>Turismo</h2>
						<p>A cidade de Canela é conhecida por atrações turísticas como a cascata do caracol, o Parque da Ferradura, a Catedral de Pedra e muito mais.</p>
					</div>
				</div>

				<div class="row row-pb-md">
					<div class="col-md-12">
						<ul id="gtco-portfolio-list">
							<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/catedral_de_pedra.jpg); "> 
								<a href="#" class="color-1">
									<div class="case-studies-summary">
										<h2>Catedral de Pedra</h2>
									</div>
								</a>
							</li>
							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/parque_terra_magica_florybal.jpg); ">
								<a href="#" class="color-2">
									<div class="case-studies-summary">
										<h2>Parque Terra Mágica Florybal</h2>
									</div>
								</a>
							</li>


							<li class="one-half animate-box" data-animate-effect="fadeIn" style="background-image: url(images/cascata_do_caracol.jpg); ">
								<a href="#" class="color-3">
									<div class="case-studies-summary">
										<h2>Cascata do Caracol</h2>
									</div>
								</a>
							</li>
							<li class="one-half animate-box" data-animate-effect="fadeIn" style="background-image: url(images/ecoparque_sperry.jpg); ">
								<a href="#" class="color-4">
									<div class="case-studies-summary">
										<h2>Ecoparque Esperry</h2>
									</div>
								</a>
							</li>

							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/parque_pinheiro_grosso.jpg); "> 
								<a href="#" class="color-5">
									<div class="case-studies-summary">
										<h2>Parque Pinheiro Grosso</h2>
									</div>
								</a>
							</li>
							<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/mundo_a_vapor.jpg); ">
								<a href="#" class="color-6">
									<div class="case-studies-summary">
										<h2>Mundo a Vapor</h2>
									</div>
								</a>
							</li>
						</ul>		
					</div>
				</div>
			</div>
		</div>

		<div id="gtco-hotel" class="gtco-section scrollspy">
			<div class="gtco-container">
				<div class="row">
					<div class="col-xs-12 text-center gtco-heading animate-box">
						<h2>O Empreendimento</h2>
						<div class="col-md-6 col-xs-12">
							<p>Design moderno, praça de entrada imponente e uma fachada que se destaca. Proporcionar tranquilidade e conforto para o dia a dia com infraestrutura completa. Espaços muito bem planejados, funcionais e confortáveis para viver, passear e desfrutar.</p>
						</div>

						<div class="col-md-5 col-md-offset-1 col-xs-12  col-xs-offset-0">
							<iframe width="100%" height="250px" src="https://www.youtube.com/embed/8PVUxOT0U8U?rel=0" frameborder="0" allow="encrypted-media" allowfullscreen=""></iframe>
						</div>
					</div>
				</div>

				<div id="gtco-features-3">
					<div class="gtco-flex">
						<div class="feature feature-1 animate-box" data-animate-effect="fadeInUp">
							<div class="feature-inner">
								<span class="icon">
									<img src="images/residencial.png">
								</span>
								<p>Um bloco Residencial contendo</p>
								<h3>36 apartamentos.</h3>
							</div>
						</div>

						<div class="feature feature-2 animate-box" data-animate-effect="fadeInUp">
							<div class="feature-inner">
								<span class="icon">
									<img src="images/hotel.png">
								</span>
								<p>Um bloco Hotel contendo</p>
								<h3>117 apartamentos.</h3>
							</div>
						</div>

						<div class="feature feature-3 animate-box" data-animate-effect="fadeInUp">
							<div class="feature-inner">
								<span class="icon">
									<img src="images/timeshare.png">
								</span>
								<p>Dois blocos Apart-hotel contendo</p>
								<h3>89 apartamentos.</h3>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center animate-box">
						<h3>Infraestrutura completa para o lazer</h3>
						<img class="gtco-image" src="images/infraestrutura.png" alt="">
					</div>
				</div>
			</div>
		</div>

		<div id="gtco-products" class="scrollspy">
			<div class="gtco-container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
						<h2>Plaza Canela</h2>
						<p>De uma espiada no que está por vir, imagens externas e internas do Plaza Canela.</p>
					</div>
				</div>
				<div class="row animate-box">
					<div class="owl-carousel owl-carousel-carousel">
						<div class="item">
							<img src="images/plaza_canela_2.png" alt="Visão panoramica Plaza Canela">
						</div>
						<div class="item">
							<img src="images/plaza_canela_3.png" alt="Entrada Plaza Canela bloco hotel">
						</div>
						<div class="item">
							<img src="images/plaza_canela_4.png" alt="Visão lateral Plaza Canela bloco hotel">
						</div>
						<div class="item">
							<img src="images/quarto_com_cozinha.png" alt="Planta quarto com cozinha">
						</div>
						<div class="item">
							<img src="images/quarto_hotel.png" alt="Planta quarto hotel">
						</div>
						<div class="item">
							<img src="images/quarto_aparthotel.png" alt="Planta quarto apart-hotel">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="gtco-subscribe" class="scrollspy">
			<div class="gtco-container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
						<h2>Entre em Contato</h2>
						<p>Está interessado? Ligue para (51) 3328.0083 e fale com um de nossos analistas financeiros
						ou envie-nos uma mensagem e entraremos em contato.</p>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2">
						<form action="#" method="post">
							<div class="row form-group">
								<div class="col-md-12">
									<label class="sr-only" for="name">Nome</label>
									<input name="name" type="text" id="name" class="form-control" placeholder="Nome">
								</div>
								
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label class="sr-only" for="phone">Telefone</label>
									<input name="phone" type="text" id="phone" class="form-control" placeholder="Telefone">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label class="sr-only" for="email">Email</label>
									<input name="email" type="text" id="email" class="form-control" placeholder="Email">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label class="sr-only" for="message">Mensagem</label>
									<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Mensagem"></textarea>
								</div>
							</div>

							<div class="form-group">
								<input name="submit" type="submit" value="Enviar Mensagem" class="btn btn-primary btn-lg">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<footer id="gtco-footer" role="contentinfo">
			<div class="gtco-container">
				<div class="row row-p b-md">
					<div>
						<img class="col-xs-12 col-md-3" src="./images/logo_preto_fundo_transparente.png" alt="Logo CommandInvest preto">
					</div>
					
					<div class="col-xs-12 col-md-4">
						<div class="gtco-widget">
							<p class="col-xs-12">
								A CommandInvest atua como incorporadora e construtora, além da gestão de projetos destinados a investidores.
							</p>
						</div>
					</div>

					<div class="col-xs-12 col-md-5">
						<div class="gtco-widget">
							<ul class="gtco-quick-contact">
								<li><a a-event="click,contact,call,(51) 3328-0083" href="tel://555133280083"><i class="icon-phone"></i> (51) 3328.0083</a></li>
								<li><a a-event="click,contact,mail,contato@commandinvest.com" href="mailto://contato@commandinvest.com"><i class="icon-mail2"></i> contato@commandinvest.com</a></li>
								<li><a a-event="click,redirect,external,Maps" href="https://www.google.com/maps/dir//Av.+Carlos+Gomes,+700+-+511+-+Auxiliadora,+Porto+Alegre+-+RS,+90480-001/" target="_blank"><i class="icon-location-pin"></i> Av. Carlos Gomes, 700 sala 511 Porto Alegre - RS</a></li>
								<li>
									<ul class="gtco-social-icons">
										<!--li><a a-event="click,redirect,social_media,Facebook" target="_blank" href="https://pt-br.facebook.com/commandinvest/"><i class="icon-facebook"></i></a></li-->
										<li><a a-event="click,redirect,social_media,LinkedIn" target="_blank" href="https://linkedin.com/company/commandinvestoficial"><i class="icon-linkedin"></i></a></li>
										<li><a a-event="click,redirect,social_media,Skype" target="_blank" href="https://join.skype.com/invite/IJoG0amfds68"><i class="icon-skype"></i></a></li>
										<!--li><a a-event="click,redirect,social_media,Twitter" target="_blank" href="https://twitter.com/commandinvest"><i class="icon-twitter"></i> </a></li-->
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<hr>

				<div class="row copyright">
					<div class="col-xs-12">
						<div class="text-center">
							<small class="block">CommandInvest &copy; 2018. Todos os direitos reservados.</small> 
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#page" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

    <script>
		$('a[href^="#"]').on('click',function (e) {
			e.preventDefault();

			var target = this.hash;
			var $target = $(target);

			$('html, body').stop().animate({
				'scrollTop': $target.offset().top
			}, 900, 'swing');
		});

        $(window).bind('scroll', function() {
            var currentTop = $(window).scrollTop();
            var elems = $('.scrollspy');
            elems.each(function(index){
                var elemTop 	= $(this).offset().top;
                var elemBottom 	= elemTop + $(this).height();
                if(currentTop >= elemTop && currentTop <= elemBottom){
                    var id 		= $(this).attr('id');
                    var navElem = $('a[href="#' + id+ '"]');
                    navElem.parent().addClass('active').siblings().removeClass( 'active' );
                }
            })
        });

        $(document).on("scroll",function(){
            if($(document).scrollTop() > 0){
                $('nav').removeClass("large");
            } else{
                $('nav').addClass("large");
            }
        });

		for (element of document.querySelectorAll('[a-event]')) {
			const config = element.getAttribute('a-event').split(',');

			$(element).on(config[0], () => 
				gtag('event', config[1], {
					'event_category' : config[2],
					'event_label': config[3]
				})
			);
		}

        $('form').on("submit",function(event){
			event.preventDefault();

			setTimeout(submitForm, 1000);

			var formSubmitted = false;

			function submitForm() {
				if (!formSubmitted) {
					formSubmitted = true;
					form.submit();
				}
			}

			gtag('event', 'contact', {
				'event_category' : 'message',
				'event_label': 'send',
				'event_callback': () => submitForm()
			});
        });
	</script>
	</body>
	<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';

	if(isset($_POST["submit"]) && $_POST["submit"] == "Enviar Mensagem")
		if(isset($_POST["name"]) && $_POST["name"] != "" &&
			isset($_POST["email"]) && $_POST["email"] != "" &&
			isset($_POST["message"]) && $_POST["message"] != "") {

			$mail = new PHPMailer;
	     
			$mail->isSMTP();
			$mail->CharSet = "UTF-8";
		    $mail->Host = 'example.com';
			$mail->SMTPDebug = false;
		    $mail->SMTPAuth = true;
		    $mail->SMTPSecure = 'ssl';
    		$mail->Username = 'mail@example.com';
    		$mail->Password = '***';
		    $mail->Port = 465;
		     
		    $mail->setFrom('contato@hotelplazacanela.com', 'Contato hotelplazacanela.com');
		    $mail->addAddress('contato@hotelplazacanela.com');
		     
		    $mail->isHTML(true);

			$phone = "Não informado.";

			if(isset($_POST["phone"]) && $_POST["phone"] != "")
				$phone = $_POST["phone"];

			$mensagem = "<strong>Nome</strong>: " . $_POST["name"] . "\n"
					 	."<strong>Email</strong>: " . $_POST["email"] . "\n"
					 	."<strong>Telefone</strong>: " . $phone . "\n"
					 	."<strong>Mensagem</strong>:\n" . $_POST["message"];

		    $mail->Subject = "Contato hotelplazacanela.com";
		    $mail->Body    = nl2br($mensagem);
		    $mail->AltBody = nl2br(strip_tags($mensagem));
		     
		    if(!$mail->send()) {
	         	echo "
	         		<script>
	         			alert('Algum erro ocorreu. Sua mensagem não foi enviada!');
     					console.warn('".$mail->ErrorInfo."');
 					</script>
				";
		    } else {
	         	echo "<script> alert('Sua mensagem foi enviada entraremos em contato em breve!') </script>";
			}
		} else {
			echo "<script> alert('Preencha os dados nome, email e mensagem!') </script>";
		}
	?>
</html>
