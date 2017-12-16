<!DOCTYPE html>

<html>
	<head>
		<link rel="image_src" href="img/logo.png">
		<meta name="description" content='SoftWorm, creador de juegos indie'>
		<link rel="shortcut icon" href="img/icono.png">
		<link rel="stylesheet" href="estilos.css">
		<title>
			SoftWorm
			<?php
				switch (@substr($_GET['id'],0,2)){
					case '01': echo ' >> Acerca de'; break;
					case '02': echo ' >> Galeria'; break;
					case '03': echo ' >> Trailers'; break;
					case '04': echo ' >> Descargas'; break;
					case '05': echo ' >> Error 404!'; break;
				}
			?>
		</title>
	</head>
	<body>
		<script type='text/javascript'>
			window.onload = detectarCarga;
			function detectarCarga(){
			document.getElementById("cargando").style.display="none";
			}
			function comentarios(){
				document.getElementById('comentarios').style.display='';
				document.getElementById('bocomentarios').style.display='none';
			}
			function comentariosoff(){
				document.getElementById('comentarios').style.display='none';
				document.getElementById('bocomentarios').style.display='';
			}
		</script>
		<img src="img/cargando.gif" id="cargando" style="position: fixed; top: 0px; right: 0px; z-index: 1;"></center>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<center>
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- Anuncio pie -->
			<ins class="adsbygoogle"
				 style="display:inline-block;width:728px;height:90px"
				 data-ad-client="ca-pub-9923053995308459"
				 data-ad-slot="1842746749"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
			<div class="bh" id="texto">
				<br>
				<div id="cabeza">
					<center>
						<div id="espacioc"></div>
						<a href="?" class="seleccion" id="opcion"><img src="img/log.png" height="100"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="?id=01" class="<?php if(@substr($_GET['id'],0,2) == '01'){echo 'seleccion';}?>" id="opcion">Acerca de</a>&nbsp;&nbsp;
						<a href="?id=02" class="<?php if(@substr($_GET['id'],0,2) == '02'){echo 'seleccion';}?>" id="opcion">Galeria</a>&nbsp;&nbsp;
						<a href="?id=03" class="<?php if(@substr($_GET['id'],0,2) == '03'){echo 'seleccion';}?>" id="opcion">Trailers</a>&nbsp;&nbsp;
						<a href="?id=04" class="<?php if(@substr($_GET['id'],0,2) == '04'){echo 'seleccion';}?>" id="opcion">Descargas</a>
					</center>
				</div>
				<hr>
				<div style="float: right">
					Contacto: krawormgm@gmail.com&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="https://www.youtube.com/c/Softworm" target="_blank"><img height="30" src="img/youtube.png" class="imagenlink"></a>&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="http://facebook.com/SoftWormOficial" target="_blank"><img height="30" src="img/facebook.png" class="imagenlink"></a>&nbsp;&nbsp;&nbsp;&nbsp;
				</div>
				<div style="crear: both;"></div>
				<br><br><hr>
				<div>
					<?php
						switch (@substr($_GET['id'],0,2)){
							case '01': include 'about.php'; break;
							case '02': include 'galeria.php'; break;
							case '03': include 'youtube.php'; break;
							case '04': include 'descargas.php'; break;
							case '05': include '404.php'; break;
							default: include 'nuevo.php';
						}
					?>
				</div><br>
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- pie1 -->
				<ins class="adsbygoogle"
					 style="display:inline-block;width:468px;height:60px"
					 data-ad-client="ca-pub-9923053995308459"
					 data-ad-slot="2542761927"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
				<hr>
				SoftWorm recomienda:<br><a href="http://www.mozilla.org/firefox" target="_blank">Usa Firefox</a>
				<hr>
				© 2011-2017 SoftWorm
			</div>
		</center>
	</body>
</html>