
<?php $__env->startSection('content'); ?>
	<p>SEMANA <?php echo e($semana); ?></p>
	<h2>SORTEOS</h2>

	<div class="semana1">		
		<a href="lunes.html">
			<img src="<?php echo e(URL::asset('img/dia1.jpg')); ?>">
		</a>		
		<a href="lunes.html">
			<img src="<?php echo e(URL::asset('img/dia2.jpg')); ?>">
		</a>		
		<a href="lunes.html">
			<img src="<?php echo e(URL::asset('img/dia3.jpg')); ?>">
		</a>		
		<a href="lunes.html">
			<img src="<?php echo e(URL::asset('img/dia4.jpg')); ?>">
		</a>		
		<a href="lunes.html">
			<img src="<?php echo e(URL::asset('img/dia5.jpg')); ?>">
		</a>		
		<a href="lunes.html">
			<img src="<?php echo e(URL::asset('img/dia6.jpg')); ?>">
		</a>		
		<a href="lunes.html">
			<img src="<?php echo e(URL::asset('img/dia7.jpg')); ?>">
		</a>
	</div>
<!--fin de contenido web-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>