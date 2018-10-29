<!DOCTYPE html>
<html lang="en">
<head><title>Sorteados 30</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#364150">
    <link rel="shortcut icon" href="<?php echo e(asset('favicon.ico')); ?>">

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::asset('js/bootstrap/dist/css/bootstrap.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::asset('js/bootstrap/css/carousel.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::asset('css/style.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <?php echo $__env->yieldContent('css'); ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="contenedor-inicio">

  <div class="barra">
    <img class="logo2" src="<?php echo e(URL::asset('img/logo.png')); ?>">
    <a href="<?php echo e(route('menu_path')); ?>">
      <img class="nav" src="<?php echo e(URL::asset('img/nav.png')); ?>">
    </a>
  </div>
    <!-- END HEADER -->
    <?php echo $__env->yieldContent('title'); ?>

      <?php if(count($errors) > 0): ?>
      <div class="alert alert-danger">
        <strong>Whoops!</strong> Ha ocurrido un error.<br><br>
        <ul>
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><?php echo e($error); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>
      <?php endif; ?>

     <?php if(session('success')): ?>
       <div class="alert alert-success">
          <?php echo e(session('success')); ?>

       </div> 
     <?php endif; ?>

      <?php echo $__env->yieldContent('content'); ?>


<?php echo $__env->make('layouts.js', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldContent('js'); ?>
</div>
</body>
</html>