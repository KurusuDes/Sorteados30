@extends('layouts.default')
@section('content')
	<p>{{ $mesN }} - SEMANA {{ $semana }}</p>
	<h2>SORTEOS</h2>
	<div class="semana1">
	<?php $key=0; ?>
	  @foreach($dias as $dia)
			<a href="{{ route('couponday_path',[$ano,$mes,$dia]) }}">
				<img src="{{ URL::asset('img/dia'.$dia.'.png') }}">
			</a>		
		<?php $key++; ?>
	  @endforeach
	</div>
@endsection