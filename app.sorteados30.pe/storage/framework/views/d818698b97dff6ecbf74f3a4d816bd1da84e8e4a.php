
<?php $__env->startSection('content'); ?>
	<h2>TICKETS</h2>	
	<div class="mis_puntos"><?php echo e($puntos); ?>

	</div>
	<div class="tickets">
		<p>Total de los tickets comprados más los tickets ganados por referencias.</p>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>