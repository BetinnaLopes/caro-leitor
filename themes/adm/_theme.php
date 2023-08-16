<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Caro Leitor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="<?= url("/assets/web/open-iconic-bootstrap.min.css");?>">
    <link rel="stylesheet" href="<?= url("/assets/web/css/animate.css");?>">
    
    <link rel="stylesheet" href="<?= url("/assets/web/css/owl.carousel.min.css");?>">
    <link rel="stylesheet" href="<?= url("/assets/web/css/owl.theme.default.min.css");?>">
    <link rel="stylesheet" href="<?= url("/assets/web/css/magnific-popup.css");?>">

    <link rel="stylesheet" href="<?= url("/assets/web/css/aos.css");?>">

    <link rel="stylesheet" href="<?= url("/assets/web/css/ionicons.min.css");?>">

    <link rel="stylesheet" href="<?= url("/assets/web/css/bootstrap-datepicker.css");?>">

    <link rel="stylesheet" href="<?= url("/assets/web/css/jquery.timepicker.css");?>">

    
    <link rel="stylesheet" href="<?= url("/assets/web/css/flaticon.css");?>">
    <link rel="stylesheet" href="<?= url("/assets/web/css/icomoon.css");?>">
    <link rel="stylesheet" href="<?= url("/assets/web/css/style.css");?>">
  </head>
  <body>

	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
			<h1 id="colorlib-logo"><a href="index.html">Caro Leitor<span>.</span></a></h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li class="colorlib-active"><a href="<?= url("/"); ?>">Início</a></li>
					<li><a href="<?= url("/resenhas"); ?>">Resenhas</a></li>
					<li><a href="<?= url("/livros"); ?>">Livros</a></li>
					<li><a href="<?= url("/autores"); ?>">Autores</a></li>
          <li><a href="<?= url("/faq"); ?>">Faqs</a></li>
					<li><a href="<?= url("/sobre"); ?>">Sobre</a></li>
					<li><a href="<?= url("/contato"); ?>">Contato</a></li>
          <li><a href="<?= url("/login"); ?>">Login</a></li>
          <li><a href="<?= url("/registro"); ?>">Cadrastro</a></li>
				</ul>
			</nav>
		
		</aside> <!-- END COLORLIB-ASIDE -->
		<div id="colorlib-main">
			<div class="hero-wrap js-fullheight" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="js-fullheight d-flex justify-content-center align-items-center">
					<div class="col-md-8 text text-center">
						<div class="img mb-4" style="background-image: url(images/author.jpg);"></div>
						<div class="desc">
							<h2 class="subheading">Olá, seja bem-vindo</h2>
							<h1 class="mb-4">ao blog Caro Leitor!</h1>
							<p class="mb-4">Este blog é um espaço para todos os leitores que procuram ler ou escrever resenhas sobre as mais variadas obras literárias. Além disso, também é um espaço para os escritores que quiserem compartilhar suas histórias! Navegue a vontade <3</p>
						</div>
					</div>
				</div>
			</div>
			<section class="ftco-section">
				
			<?php
                 echo $this->section("content");
             ?>

  <script src="<?=url("/assets/web/js/jquery.min.js");?>"></script>
  <script src="<?=url("/assets/web/js/jquery-migrate-3.0.1.min.js");?>"></script>
  <script src="<?=url("/assets/web/js/popper.min.js");?>"></script>
  <script src="<?=url("/assets/web/js/bootstrap.min.js");?>"></script>
  <script src="<?=url("/assets/web/js/jquery.easing.1.3.js");?>"></script>
  <script src="<?=url("/assets/web/js/jquery.waypoints.min.js");?>"></script>
  <script src="<?=url("/assets/web/js/jquery.stellar.min.js");?>"></script>
  <script src="<?=url("/assets/web/js/owl.carousel.min.js");?>"></script>
  <script src="<?=url("/assets/web/js/jquery.magnific-popup.min.js");?>"></script>
  <script src="<?=url("/assets/web/js/aos.js");?>"></script>
  <script src="<?=url("/assets/web/js/jquery.animateNumber.min.js");?>"></script>
  <script src="<?=url("/assets/web/js/bootstrap-datepicker.js");?>"></script>
  <script src="<?=url("/assets/web/js/jquery.timepicker.min.js");?>"></script>
  <script src="<?=url("/assets/web/js/scrollax.min.js");?>"></script>
  <script src="<?=url("/assets/web/js/google-map.js");?>"></script>
  <script src="<?=url("/assets/web/js/main.js");?>"></script>
    
  </body>
</html>