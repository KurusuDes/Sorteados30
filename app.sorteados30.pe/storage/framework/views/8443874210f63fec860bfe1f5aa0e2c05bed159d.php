<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1>REGISTRO DE USUARIO</h1>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control<?php echo e($errors->has('lastname') ? ' is-invalid' : ''); ?>" placeholder="Apellidos" name="lastname" value="<?php echo e(old('lastname')); ?>" required autofocus>
                                <?php if($errors->has('lastname')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('lastname')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" placeholder="Nombres" name="name" value="<?php echo e(old('name')); ?>" required>
                                <?php if($errors->has('name')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="docnumber" type="text" class="form-control<?php echo e($errors->has('docnumber') ? ' is-invalid' : ''); ?>" placeholder="DNI o CE" name="docnumber" value="<?php echo e(old('docnumber')); ?>" required>
                                <?php if($errors->has('docnumber')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('docnumber')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="phonenumber" type="text" class="form-control<?php echo e($errors->has('phonenumber') ? ' is-invalid' : ''); ?>" placeholder="Teléfono móvil" name="phonenumber" value="<?php echo e(old('phonenumber')); ?>" required>
                                <?php if($errors->has('phonenumber')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('phonenumber')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
								<input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" placeholder="Correo electrónico" name="email" value="<?php echo e(old('email')); ?>" required>
                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" placeholder="Contraseña" name="password" required>
                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" placeholder="Confirma contraseña" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="referer" type="text" class="form-control<?php echo e($errors->has('referer') ? ' is-invalid' : ''); ?>" placeholder="DNI del referido" name="referer" value="<?php echo e(old('referer')); ?>" >
                                <?php if($errors->has('referer')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('referer')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    REGISTRAR
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>