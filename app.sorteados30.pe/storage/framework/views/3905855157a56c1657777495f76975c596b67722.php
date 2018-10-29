<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="<?php echo e(URL::asset('css/style.css')); ?>" rel="stylesheet" type="text/css" />
	<!--cod para tildes y letras como ñ-->
	<meta charset="UTF-8">
	<!--responsivo-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!--fuentes-->
	<link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Hind' rel='stylesheet' type='text/css'>
</head>
<body>
<!--contenido app-->
<div class="contenedor-menu">
	<header>
		<img class="logo2" src="<?php echo e(URL::asset('img/logo.png')); ?>">
	</header>
	<div class="menu">		
		<a href="<?php echo e(route('home_path')); ?>">
		<h2>INICIO</h2>
		</a>
		<hr>		
		<a href="<?php echo e(route('account_path')); ?>">
		<h2>MI CUENTA</h2>
		</a>
		<hr>		
		<a href="<?php echo e(route('home_path')); ?>">
		<h2>VER SORTEOS</h2>
		</a>
		<hr>		
		<a href="<?php echo e(route('buytickets_path')); ?>">
		<h2>COMPRAR MAS TICKETS</h2>
		</a>
		<hr>
		<a href="<?php echo e(route('winners_path')); ?>">
		<h2>GANADORES</h2>
		</a>
		<hr>
		<a href="<?php echo e(route('negocios_path')); ?>">
		<h2>NEGOCIOS AFILIADOS</h2>
		</a>
		<hr>		
		<a href="<?php echo e(route('points_path')); ?>">
		<h2>MIS PUNTOS GANADOS</h2>
		</a>
		<hr>		
		<a href="<?php echo e(route('sugerencias_path')); ?>">
		<h2>ENVIAR SUGERENCIAS</h2>
		</a>
		<hr>		
		<a href="<?php echo e(route('contact_path')); ?>">
		<h2>CONTACTO</h2>
		</a>
		<a href="http://www.facebook.com" target="_blank">
			<img src="img/face.png">
		</a>
	</div>
</div>
<!--fin de contenido web-->
<!--SCRIPT RESPONSIVE-->    
    <script type="text/javascript" src="js/jquery/jquery.min.js"></script>
    <script>
        $(function() {
            var btn_movil = $('#nav-mobile'),
                menu = $('#menu').find('ul');

            // Al dar click agregar/quitar clases que permiten el despliegue del enú
            btn_movil.on('click', function (e) {
                e.preventDefault();
                var el = $(this);
                el.toggleClass('nav-active');
                menu.toggleClass('open-menu');
            })
        });
    </script>
<!--FIN DE SCRIPT RESPONSIVE-->
</body>
</html>