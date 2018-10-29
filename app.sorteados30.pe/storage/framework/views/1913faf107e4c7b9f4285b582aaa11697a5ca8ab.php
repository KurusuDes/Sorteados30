
<?php $__env->startSection('content'); ?>
	<p>&nbsp;</p>
	<h2>Sorteos del <?php echo e($dia); ?> de <?php echo e($mesN); ?></h2>
	<div class="dia">
		<?php if(count($data) > 0): ?>
		  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<a href="<?php echo e(route('coupon_path',[$dato->id])); ?>">
				<img class="dia_img" src="http://admin.sorteados30.pe/images/coupons/<?php echo e($dato->image_name); ?>">
			</a>
		  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php else: ?>
			<div align="center">
			<img src="<?php echo e(URL::asset('img/no_results.png')); ?>">
			<br />
			No se han encontrado cupones disponibles.
			</div>
		<?php endif; ?>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>