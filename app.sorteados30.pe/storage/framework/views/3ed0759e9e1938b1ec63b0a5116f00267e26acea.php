<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('js/bootstrap/css/carousel.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <p>CUPONES DE SORTEO<br><br></p>
    <h2><?php echo e($mes); ?></h2>
    <div class="slider">
        <div class="row" style="height:300px;margin-top:50px;">
            <div class="col-lg-12">  
                <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height:300px;">
                  <div class="carousel-inner" role="listbox" style="height:300px;">
					<?php if(count($data) > 0): ?>
						<?php $key = 1; ?>
					  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cupon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="item 
						<?php if($key == 1): ?>
							active
						<?php endif; ?>
						">
							<img src="http://admin.sorteados30.pe/images/coupons/<?php echo e($cupon->image_name); ?>" alt="<?php echo e($cupon->title); ?>" style="height:300px;">                      
						</div>
						<?php $key++; ?>
					  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php endif; ?>
                  </div>
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                  </a>
                </div>
              </div>
        </div> 
    </div>
    <div class="conte-semanas">
	<?php if($cantSemanas > 0): ?>
		<?php for($i = 1; $i <= $cantSemanas; $i++): ?>
			<a href="couponbyweek/<?php echo e($ano); ?>/<?php echo e($mesn); ?>/<?php echo e($i); ?>">
				<img src="img/semana<?php echo e($i); ?>.jpg">
			</a>
		<?php endfor; ?>
	<?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>