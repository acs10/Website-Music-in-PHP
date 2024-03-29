<?php

session_start();

include "conect.php";
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT * FROM posts LIMIT 3");
// executa a query
$dados = mysql_query($query, $con) or die(mysql_error());


?>

 <html>
	<head>
		<title>AGRMusic</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen">   
		<script src="js/jquery-1.6.3.min.js" type="text/javascript"></script>
		<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/cufon-replace.js" type="text/javascript"></script>
	  
		<script src="js/FF-cash.js" type="text/javascript"></script> 
		<script src="js/script.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/easyTooltip.js"></script>
		<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
		<script src="js/hover-image.js" type="text/javascript"></script>
		<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
		<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/tms-0.3.js"></script>
		<script type="text/javascript" src="js/tms_presets.js"></script>
		<script type="text/javascript">
			$(window).load(function(){
				$('.slider')._TMS({
					duration:800,
					easing:'easeOutQuad',
					preset:'diagonalFade',
					pagination:false,
					slideshow:6000,
					banners:false,
					waitBannerAnimation:false,
					pauseOnHover:true
				});
				$("a[data-gal^='prettyVideo']").prettyPhoto({animation_speed:'normal',theme:'facebook',slideshow:false, autoplay_slideshow: false});
			}); 
		</script>		
	</head>
	<body id="page1">
		<div class="extra">
<!--==============================header=================================-->
			<header>
				<div class="main">
					<div class="bg-1">
						<h1><a href="index.php">AGRMusic</a></h1>
					</div>
					<nav>
						<div class="menu-bg-tail">
							<div class="menu-bg">
								<div class="container_12">
									<div class="grid_12">
										<ul class="menu">
											<li class="item"><a href="index.php">Home</a></li>
											<li><a href="musicas.php">Músicas</a></li>
											<li><a href="clipes.php">Clipes</a></li>
											<li><a href="letras.php">Cifras</a></li>
											
											<?php
									if(isset($_SESSION['nome'])){
									echo "<li><a>".$_SESSION['nome'] . " | </a> <a href='sair.php'>Sair</a></li>"; 
										}else{ echo "<li><a href='login.php'>Login</a></li>"; 
											echo "<li><a href='cadastro.html'>Cadastro</a></li>";}
									      ?>
											
										</ul>
										<div class="clear"></div>
									</div>
									<div class="clear"></div>
								</div>
							</div>
						</div>
					</nav>
					<div class="slider-wrapper">
						<div class="slider">
							<ul class="items">
								<li><img src="images/slider-img1.jpg" alt="" /></li>
								<li>
									<img src="images/slider-img2.jpg" alt="" />
								</li>
								<li>
									<img src="images/slider-img3.jpg" alt="" />
								</li>
							</ul> 
						</div>
					</div>
				</div>
			</header>
 
<!--==============================content================================-->
			<section id="content"><div class="ic"></div>
				<div class="main">
					<div class="bg-2">
						<div class="content-padding-1">
							<div class="container_12">
								<div class="wrapper">
									<article class="grid_4">
										<div class="padding-grid-1">
											<h3 class="letter">Novas <strong>Músicas</strong></h3>
											
 								<?php  while($linha = mysql_fetch_object($dados)) { ?>
											<div class="wrapper img-indent-bot1">
						<time class="time time-stule-1" > <strong class="text-1"> <?php echo $linha->id; ?>  </strong></time>
												<div class="extra-wrap">
													<div class="indent-top">
														
				<?php echo $linha->cantor; ?> <br>  <?php echo $linha->titulo; ?> <br> <a href="ler.php?id=<?php echo $linha->id; ?>">Ler Mais >></a>

													</div>
												</div>
											</div>
<?php } ?>
 

									</article>
									<article class="grid_4 alpha">
										<div class="padding-grid-1">
											<h3>Avaliação <strong>Músicas</strong></h3>
											<div class="wrapper img-indent-bot2">
												<time class="time time-stule-2" datetime="2011-11-09"> <strong class="text-3">01</strong><strong class="text-4">one</strong></time>
												<div class="extra-wrap">
								            		<article class="grid_4 alpha">
											<div class="padding-grid-3">
				                            <a class="link-2 link-style1" href="#"></a>
											</div>
										</article>
                                        </div>
											</div>
											<div class="wrapper img-indent-bot2">
												<time class="time time-stule-2" datetime="2011-11-05"> <strong class="text-3">02</strong><strong class="text-4">two</strong></time>
												<div class="extra-wrap">
													<article class="grid_4 alpha">
											<div class="padding-grid-3">
				                            <a class="link-2 link-style1" href="#"></a>
											</div>
										</article>
												</div>
											</div>
											<div class="wrapper">
												<time class="time time-stule-2" datetime="2011-11-01"> <strong class="text-3">03</strong><strong class="text-4">three</strong></time>
												<div class="extra-wrap">
													<article class="grid_4 alpha">
											<div class="padding-grid-3">
				                            <a class="link-2 link-style1" href="#"></a>
											</div>
										</article>
												</div>
											</div>
										</div>
									</article>
									<article class="grid_4 alpha">
										<div class="padding-grid-2">
											<h3 class="letter">  <strong> </strong></h3>
											<div class="wrapper">
												<figure class="style-img fleft"><a href="#"><img src="images/page1-img1.jpg"  alt=""></a></figure>
											</div>
										</div>
									</article>
								</div>
							</div>
						</div>
					</div>
					<div class="content-padding-2">
						<div class="container_12">
							<div class="wrapper">
								<article class="grid_4">
									<div class="padding-grid-1">
										<h3>Ultimos <strong>Eventos</strong></h3>
										<div class="wrapper img-indent-bot1">
											<time class="time time-stule-3" datetime="2011-10-09"> <strong class="text-5">05</strong><strong class="text-6">nov</strong></time>
											<div class="extra-wrap">
												<div class="indent-top">
													Grande show no Rock in Rio , mais de 1 milhão de pessoas Compareceram.
												</div>
											</div>
										</div>
										<div class="wrapper">
											<time class="time time-stule-3" datetime="2011-11-03"> <strong class="text-5">03</strong><strong class="text-6">nov</strong></time>
											<div class="extra-wrap">
												<div class="indent-top">
													Grande Evento No Casamento do Principe Willians.
												</div>
											</div>
										</div>
									</div>
								</article>
								<article class="grid_4 alpha">
									<div class="padding-grid-2">
										<h3 class="letter">Melhor <strong>Video</strong></h3>
										
										<div class="wrapper">
	<figure class="style-img-2 fleft"><a class="lightbox-image" href="http://www.youtube.com/watch?v=JFnWGEDZGBk" data-gal="prettyVideo[prettyVideo]">
<img src="https://i.ytimg.com/vi/JFnWGEDZGBk/maxresdefault.jpg" width="252" height="126"  alt=""></a></figure>
										</div>
									</div>
								</article>
								<article class="grid_4 alpha">
									<div class="padding-grid-2">
										<h3 class="letter prev-indent-bot1">Sobre <strong></strong></h3>
										<h6>Carreira</h6>
										Marcos começou a cantar aos 15 anos em bailes, bares e com outras duplas, se destacou no mercado fonográfico, compondo grandes sucessos gravados por Zezé di Camargo e Luciano, Edson & Hudson, além da faixa "Eu sou peão", da novela América da Rede Globo,
Belutti começou a cantar profissionalmente aos 11 anos de idade, se apresentando em shows de música sertaneja por todo Brasil.
									</div>
								</article>
							</div>
						</div>
					</div>
				</div>
				<div class="block"></div>
			</section>
		</div>
<!--==============================footer=================================-->
		<footer>
			<div class="main">
				<div class="footer-bg">
					<div class="container_12">
						<div class="wrapper">
							<div class="grid_12">
								<div class="footer-padding">
									<div class="wrapper">
										
										<ul class="list-services">
											<li><a class="tooltips n-1" title="Twitter" href="https://twitter.com/?lang=pt-br"></a></li>
											<li><a class="tooltips n-2" title="Facebook" href="https://www.facebook.com/"></a></li>
											<li class="last"><a class="tooltips n-3" title="Youtube" href="https://www.youtube.com/"></a></li>
										</ul>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<script type="text/javascript"> Cufon.now(); </script>
	</body>
</html>
