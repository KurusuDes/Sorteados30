@extends('layouts.default')
@section('content')
	<h2>Sorteo del {{ $dia}} de {{ $mesN }}</h2>	
	<div class="cupon">
		@if (count($data) > 0)
		<div class="slider2">
			<div class="row" style="height:300px;margin-top:50px;">
				<div class="col-lg-12">  
					<div id="myCarousel" class="carousel slide" data-ride="carousel" style="height:300px;">
					  <?php $key = 0; ?>
					  @if (count($data) > 1)
						<ol class="carousel-indicators">
					  @foreach($data as $dato)
						<li data-target="#myCarousel" data-slide-to="{{ $key }}" 
							@if ($key == 0)
								class="active"
							@endif
						></li>
						<?php $key++; ?>
					  @endforeach
					  </ol>
					  @endif
					  <div class="carousel-inner" role="listbox" style="height:300px;">
						<?php $key = 1; ?>
						  @foreach($data as $dato)
							<div class="item 
							@if ($key == 1)
								active
							@endif
							">
								<img src="http://admin.sorteados30.pe/images/coupons/{{ $dato->image_name }}" style="height:300px;">
							</div>
							<?php $key++; ?>
						  @endforeach
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
				<h2>{{ $cupon->titular }}</h2>
				<br>
				<p>{{ $cupon->description }}</p>
				</div>
			</div>
			<div class="row">
				<form id="participaForm" name="participaForm" method="POST" action="{{ url('/participar') }}"> 
					<div class="col-md-6 col-sm-6 col-xs-6">
						<select name="cboOpciones" id="cboOpciones" class="opciones">
						@for ($i = 1; $i <= 50; $i++)
							<option value="{{ $i }}">{{ $i }}</option>
						@endfor
						</select>
						<span> opción(es)</span>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6">
						<a href="comprar-tickets.html">
							<button class="button">PARTICIPAR</button>
						</a>
					</div>
					<input type="hidden" name="couponId" value="{{ $cupon->id }}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				</form>
			</div>
		</div>
		@else
			<div align="center">
			<img src="{{ URL::asset('img/no_results.png') }}">
			<br />
			No se han encontrado cupones disponibles.
			</div>
		@endif
		
	</div>
@endsection