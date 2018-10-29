@extends('layouts.default')
@section('content')
	<p>&nbsp;</p>
	<h2>Sorteos del {{ $dia}} de {{ $mesN }}</h2>
	<div class="dia">
		@if (count($data) > 0)
		  @foreach($data as $dato)
			<a href="{{ route('coupon_path',[$dato->id]) }}">
				<img class="dia_img" src="http://admin.sorteados30.pe/images/coupons/{{ $dato->image_name }}">
			</a>
		  @endforeach
		@else
			<div align="center">
			<img src="{{ URL::asset('img/no_results.png') }}">
			<br />
			No se han encontrado cupones disponibles.
			</div>
		@endif
	</div>
@endsection