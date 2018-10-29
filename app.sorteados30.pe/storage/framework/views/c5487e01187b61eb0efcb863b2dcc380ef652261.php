
<?php $__env->startSection('content'); ?>

	<h2>MI CUENTA</h2>

	<!--<img class="foto" src="img/foto.jpg">-->

	<div class="c1">
		<h4>Nombre y Apellido</h4>
		<p><?php echo e($data->name); ?> <?php echo e($data->lastname); ?></p>
		<h4>DNI/CE</h4>
		<p><?php echo e($data->docnumber); ?></p>
	</div>
	<div class="c2">
		<h4>EMAIL</h4>
		<p><?php echo e($data->email); ?></p>
		<h4>TELEFONO</h4>
		<p><?php echo e($data->phonenumber); ?></p>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>