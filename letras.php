<?php

session_start();

include "conect.php";
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT * FROM posts LIMIT 18");
// executa a query
$dados = mysql_query($query, $con) or die(mysql_error());

if(!isset($_SESSION['nome'])){
 header('location:login.php');
}

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
					
				</div>
			</header>
 

            
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
														
				<?php echo $linha->cantor; ?> <br>  <?php echo $linha->titulo; ?> <br> <a href="ler.php?id=<?php echo $linha->id; ?>">Cifra >></a>

													</div>
												</div>
											</div>
<?php } ?>
 

									</article>
            
 
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
