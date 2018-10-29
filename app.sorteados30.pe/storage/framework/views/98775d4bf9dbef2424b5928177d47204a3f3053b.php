
<?php $__env->startSection('content'); ?>
	<h2>Sorteo del <?php echo e($dia); ?> de <?php echo e($mesN); ?></h2>	
	<div class="cupon">
		<?php if(count($data) > 0): ?>
		<div class="slider2">
			<div class="row" style="height:300px;margin-top:50px;">
				<div class="col-lg-12">  
					<div id="myCarousel" class="carousel slide" data-ride="carousel" style="height:300px;">
					  <?php $key = 0; ?>
					  <?php if(count($data) > 1): ?>
						<ol class="carousel-indicators">
					  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li data-target="#myCarousel" data-slide-to="<?php echo e($key); ?>" 
							<?php if($key == 0): ?>
								class="active"
							<?php endif; ?>
						></li>
						<?php $key++; ?>
					  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					  </ol>
					  <?php endif; ?>
					  <div class="carousel-inner" role="listbox" style="height:300px;">
						<?php $key = 1; ?>
						  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="item 
							<?php if($key == 1): ?>
								active
							<?php endif; ?>
							">
								<img src="http://admin.sorteados30.pe/images/coupons/<?php echo e($dato->image_name); ?>" style="height:300px;">
							</div>
							<?php $key++; ?>
						  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					  </div>

					  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Anterior</span>
					  </a>

					  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Siguiente</span>
					  </a>

					</div><!-- /.carousel -->
				  </div>
			</div> 		
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<h2><?php echo e($cupon->titular); ?></h2>
				<br>
				<p><?php echo e($cupon->description); ?></p>
				</div>
			</div>
			<div class="row">
				<form id="participaForm" name="participaForm" method="POST" action="<?php echo e(url('/participar')); ?>"> 
					<div class="col-md-6 col-sm-6 col-xs-6">
						<select name="cboOpciones" id="cboOpciones" class="opciones">
						<?php for($i = 1; $i <= 50; $i++): ?>
							<option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
						<?php endfor; ?>
						</select>
						<span> opción(es)</span>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6">
						<a href="comprar-tickets.html">
							<button class="button">PARTICIPAR</button>
						</a>
					</div>
					<input type="hidden" name="couponId" value="<?php echo e($cupon->id); ?>">
					<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
				</form>
			</div>
		</div>
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