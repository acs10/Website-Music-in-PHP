<?php

session_start();

include "conect.php";
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT * FROM posts LIMIT 3");
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
			
 
<!--==============================content================================-->
			<section id="content"><div class="ic"></div>
                <div>
				<div class="main">
					<div class="content-padding-2">
						<div class="container_12">
							<div class="wrapper">
								<div class="grid_12">
									<div class="padding-grid-1">
										<h3 class="letter">Clipes <strong></strong></h3>
									</div>
									<div class="wrapper indent-bot1">
										<article class="grid_4 alpha">
											<div class="padding-grid-2">
												<div class="wrapper p2">
													<figure class="style-img-2 fleft"><a class="lightbox-image"
                                                    
                                                href="http://www.youtube.com/watch?v=JFnWGEDZGBk" data-gal="prettyVideo[prettyVideo]"><img img src="https://i.ytimg.com/vi/JFnWGEDZGBk/maxresdefault.jpg" width="252" height="126"  alt=""></a></figure>
												</div>
												<p class="prev-indent-bot2">Avaliação do video</p>
												<a class="link-2" href="#"></a>
											</div>
										</article>
										<article class="grid_4 alpha">
											<div class="padding-grid-3">
												<div class="wrapper p2">
													<figure class="style-img-2 fleft"><a class="lightbox-image"
                                                     href="http://www.youtube.com/watch?v=g-FIuQFDAxI"data-gal="prettyVideo[prettyVideo]"><img  src="https://i.ytimg.com/vi/g-FIuQFDAxI/maxresdefault.jpg" width="252" height="126"  alt=""></a></figure>
												</div>
												<p class="prev-indent-bot2">Avaliação do video</p>
												<a class="link-2 link-style1" href="#"></a>
											</div>
										</article>
										<article class="grid_4 alpha">
											<div class="padding-grid-2">
												<div class="wrapper p2">
													<figure class="style-img-2 fleft"><a class="lightbox-image"   href="http://www.youtube.com/watch?v=YW4-V0xQkTg" data-gal="prettyVideo[prettyVideo]"><img img src="https://i.ytimg.com/vi/YW4-V0xQkTg/maxresdefault.jpg" width="252" height="126"  alt=""></a></figure>
												</div>
												<p class="prev-indent-bot2">Avaliação do video</p>
												<a class="link-2 link-style2" href="#"></a>
											</div>
										</article>
									</div>
									<div class="wrapper">
										<article class="grid_4 alpha">
											<div class="padding-grid-2">
												<div class="wrapper p2">
													<figure class="style-img-2 fleft"><a class="lightbox-image"   href="http://www.youtube.com/watch?v=0ZrH5yyWHqE" data-gal="prettyVideo[prettyVideo]"><img img src="https://i.ytimg.com/vi/0ZrH5yyWHqE/maxresdefault.jpg" width="252" height="126"  alt=""></a></figure>
												</div>
												<p class="prev-indent-bot2">Avaliação do video</p>
												<a class="link-2" href="#"></a>
											</div>
										</article>
										<article class="grid_4 alpha">
											<div class="padding-grid-3">
												<div class="wrapper p2">
													<figure class="style-img-2 fleft"><a class="lightbox-image"   href="http://www.youtube.com/watch?v=gmvFLIuVAbA" data-gal="prettyVideo[prettyVideo]"><img img src="https://i.ytimg.com/vi/gmvFLIuVAbA/maxresdefault.jpg" width="252" height="126"  alt=""></a></figure>
												</div>
												<p class="prev-indent-bot2">Avaliação do video</p>
												<a class="link-2 link-style1" href="#"></a>
											</div>
										</article>
										<article class="grid_4 alpha">
											<div class="padding-grid-2">
												<div class="wrapper p2">
													<figure class="style-img-2 fleft"><a class="lightbox-image"   href="http://www.youtube.com/watch?v=ysZP--fcgnc" data-gal="prettyVideo[prettyVideo]"><img img src="https://i.ytimg.com/vi/ysZP--fcgnc/maxresdefault.jpg" width="252" height="126"  alt=""></a></figure>
												</div>
												<p class="prev-indent-bot2">Avaliação do video</p>
												<a class="link-2 link-style2" href="#"></a>
											</div>
                                            <div>
    
                                            	</div>
										</article>
										<article class="grid_4 alpha">
											<div class="padding-grid-2">
												<div class="wrapper p2">
													<figure class="style-img-2 fleft"><a class="lightbox-image"   href="http://www.youtube.com/watch?v=m5h_vEh8Noo" data-gal="prettyVideo[prettyVideo]"><img img src="https://i.ytimg.com/vi/m5h_vEh8Noo/maxresdefault.jpg" width="252" height="126"  alt=""></a></figure>
												</div>
												<p class="prev-indent-bot2">Avaliação do video</p>
												<a class="link-2 link-style2" href="#"></a>
											</div>
                                        
										</article>
                                        
                                     
                                        										<article class="grid_4 alpha">
											<div class="padding-grid-2">
												<div class="wrapper p2">
													<figure class="style-img-2 fleft"><a class="lightbox-image"   href="http://www.youtube.com/watch?v=YzCoZGsod0c" data-gal="prettyVideo[prettyVideo]"><img img src="https://i.ytimg.com/vi/YzCoZGsod0c/maxresdefault.jpg" width="252" height="126"  alt=""></a></figure>
												</div>
												<p class="prev-indent-bot2">Avaliação do video</p>
												<a class="link-2 link-style2" href="#"></a>
											</div>
                                        
										</article>
                                        <article class="grid_4 alpha">
											<div class="padding-grid-2">
												<div class="wrapper p2">
													<figure class="style-img-2 fleft"><a class="lightbox-image"   href="http://www.youtube.com/watch?v=vkJ5Lc0WwVw" data-gal="prettyVideo[prettyVideo]"><img img src="https://i.ytimg.com/vi/vkJ5Lc0WwVw/maxresdefault.jpg" width="252" height="126"  alt=""></a></figure>
												</div>
												<p class="prev-indent-bot2">Avaliação do video</p>
												<a class="link-2 link-style2" href="#"></a>
											</div>
                                        
										</article>
                                        
                                        	<article class="grid_4 alpha">
											<div class="padding-grid-2">
												<div class="wrapper p2">
													<figure class="style-img-2 fleft"><a class="lightbox-image"   href="http://www.youtube.com/watch?v=vZcjAmfkemk" data-gal="prettyVideo[prettyVideo]"><img img src="https://i.ytimg.com/vi/vZcjAmfkemk/maxresdefault.jpg" width="252" height="126"  alt=""></a></figure>
												</div>
												<p class="prev-indent-bot2">Avaliação do video</p>
												<a class="link-2" href="#"></a>
											</div>
										</article>
                                        
                                        <article class="grid_4 alpha">
											<div class="padding-grid-2">
												<div class="wrapper p2">
													<figure class="style-img-2 fleft"><a class="lightbox-image"   href="http://www.youtube.com/watch?v=UcXckYdkSDQ" data-gal="prettyVideo[prettyVideo]"><img img src="https://i.ytimg.com/vi/UcXckYdkSDQ/maxresdefault.jpg" width="252" height="126"  alt=""></a></figure>
												</div>
												<p class="prev-indent-bot2">Avaliação do video</p>
												<a class="link-2" href="#"></a>
											</div>
										</article>
                                        <article class="grid_4 alpha">
											<div class="padding-grid-2">
												<div class="wrapper p2">
													<figure class="style-img-2 fleft"><a class="lightbox-image"   href="http://www.youtube.com/watch?v=X8jD3F9PI7Q" data-gal="prettyVideo[prettyVideo]"><img img src="https://i.ytimg.com/vi/X8jD3F9PI7Q/maxresdefault.jpg" width="252" height="126"  alt=""></a></figure>
												</div>
												<p class="prev-indent-bot2">Avaliação do video</p>
												<a class="link-2" href="#"></a>
											</div>
										</article>
                                        
									</div>
								</div>
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
