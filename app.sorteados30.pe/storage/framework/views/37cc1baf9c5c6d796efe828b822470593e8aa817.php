<?php $__env->startSection('content'); ?>


    <p>CUPONES DE SORTEO<br><br></p>
    <h2><?php echo e($mes); ?></h2>

    <div class="slider">
        
        <div class="row" style="height:300px;margin-top:50px;">
            <div class="col-lg-12">  
                <!-- Carousel
                ================================================== -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height:300px;">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                  </ol>
                  <div class="carousel-inner" role="listbox" style="height:300px;">
                    <div class="item active">
                        <img  src="img/slider.jpg" alt="Cena romántica para 2 personas en restaurante LongHorn" style="height:300px;">
                      
                    </div>
                    <div class="item" >
                      <img  src="img/slider2.jpg" alt="Habitación doble - noche romántica en el mejor hotel de Lima" style="height:300px;">                   
                    </div>
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

    <div class="conte-semanas">
        
        <a href="couponbyweek/<?php echo e($mesn); ?>/1">
            <img src="img/semana1.jpg">
        </a>

        <a href="couponbyweek/<?php echo e($mesn); ?>/2">
            <img src="img/semana2.jpg">
        </a>

        <a href="couponbyweek/<?php echo e($mesn); ?>/3">
            <img src="img/semana3.jpg">
        </a>

        <a href="couponbyweek/<?php echo e($mesn); ?>/4">
            <img src="img/semana4.jpg">
        </a>

    </div>

</div>


<!--fin de contenido web-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>