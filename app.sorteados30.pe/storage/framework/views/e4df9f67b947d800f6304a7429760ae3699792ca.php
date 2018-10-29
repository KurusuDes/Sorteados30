
<?php $__env->startSection('content'); ?>
	<p>CREANDO MI CUENTA</p>
	<h2>REGISTRO</h2>

	<div class="sugerencias">
		<form method="post" action="<?php echo e(url('newuser')); ?>" enctype="multipart/form-data" class="form-horizontal">
			<input type="input" name="lastname" placeholder="Apellidos" required>
			<input type="input" name="firstname" placeholder="Nombres" required>
			<input type="input" name="docnumber" placeholder="DNI o CE" required>
			<input type="email" name="email" placeholder="Correo electrónico" required>
			<input type="password" name="pass1" placeholder="Contraseña" required>
			<input type="password" name="pass2" placeholder="Repetir contraseña" required>
			<input type="input" name="referer" placeholder="DNI o CE del referido">
			<button>REGISTRAR</button>
		</form>		
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>