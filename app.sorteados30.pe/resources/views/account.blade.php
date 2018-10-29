@extends('layouts.default')
@section('content')

	<h2>MI CUENTA</h2>

	<!--<img class="foto" src="img/foto.jpg">-->

	<div class="c1">
		<h4>Nombre y Apellido</h4>
		<p>{{ $data->name }} {{ $data->lastname }}</p>
		<h4>DNI/CE</h4>
		<p>{{ $data->docnumber }}</p>
	</div>
	<div class="c2">
		<h4>EMAIL</h4>
		<p>{{ $data->email }}</p>
		<h4>TELEFONO</h4>
		<p>{{ $data->phonenumber }}</p>
	</div>

@endsection