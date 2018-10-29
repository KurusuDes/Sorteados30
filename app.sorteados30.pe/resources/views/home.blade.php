@extends('layouts.default')
@section('css')
<link href="{{ URL::asset('js/bootstrap/css/carousel.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <p>CUPONES DE SORTEO<br><br></p>
    <h2>{{$mes}}</h2>
    <div class="slider">
        <div class="row" style="height:300px;margin-top:50px;">
            <div class="col-lg-12">  
                <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height:300px;">
                  <div class="carousel-inner" role="listbox" style="height:300px;">
					@if (count($data) > 0)
						<?php $key = 1; ?>
					  @foreach($data as $cupon)
						<div class="item 
						@if ($key == 1)
							active
						@endif
						">
							<img src="http://admin.sorteados30.pe/images/coupons/{{ $cupon->image_name }}" alt="{{ $cupon->title }}" style="height:300px;">                      
						</div>
						<?php $key++; ?>
					  @endforeach
					@endif
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
	@if ($cantSemanas > 0)
		@for ($i = 1; $i <= $cantSemanas; $i++)
			<a href="couponbyweek/{{$ano}}/{{$mesn}}/{{ $i }}">
				<img src="img/semana{{ $i }}.jpg">
			</a>
		@endfor
	@endif
    </div>
</div>
@endsection
@section('js')
@endsection