
<?php $__env->startSection('content'); ?>

	<p>ENVIANDO SUGERENCIAS</p>
	<h2>SUGERENCIAS</h2>

	<div class="sugerencias">
		
		<input type="" name="" placeholder="Nombre y Apellido">

		<input type="" name="" placeholder="DNI">

		<input type="" name="" placeholder="correo electrónico">

		<input type="" name="" placeholder="¿Qué sorteos te interesan?">

		<input type="" name="" placeholder="Consejos sobre la plataforma">

		<button>ENVIAR</button>

	</div>
<!--fin de contenido web-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>