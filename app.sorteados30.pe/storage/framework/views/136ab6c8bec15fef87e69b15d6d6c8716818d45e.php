
<?php $__env->startSection('content'); ?>
	<p><?php echo e($mesN); ?> - SEMANA <?php echo e($semana); ?></p>
	<h2>SORTEOS</h2>
	<div class="semana1">
	<?php $key=0; ?>
	  <?php $__currentLoopData = $dias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<a href="<?php echo e(route('couponday_path',[$ano,$mes,$dia])); ?>">
				<img src="<?php echo e(URL::asset('img/dia'.$dia.'.png')); ?>">
			</a>		
		<?php $key++; ?>
	  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>