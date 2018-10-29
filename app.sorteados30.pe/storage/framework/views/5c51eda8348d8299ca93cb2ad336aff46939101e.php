<script type="text/javascript" src="<?php echo e(URL::asset('js/jquery/jquery.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(URL::asset('js/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
<script>
	$(function() {
		var btn_movil = $('#nav-mobile'),
			menu = $('#menu').find('ul');
		// Al dar click agregar/quitar clases que permiten el despliegue del menú
		btn_movil.on('click', function (e) {
			e.preventDefault();
			var el = $(this);
			el.toggleClass('nav-active');
			menu.toggleClass('open-menu');
		})
	});
</script>