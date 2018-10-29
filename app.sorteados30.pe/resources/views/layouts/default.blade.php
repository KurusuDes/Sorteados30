<!DOCTYPE html>
<html lang="en">
<head><title>Sorteados 30</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{{ asset('favicon.ico') }}}">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link href="{{ URL::asset('js/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('css/style.css?v=1.38') }}" rel="stylesheet" type="text/css" />
    @yield('css')

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
    <img class="logo2" src="{{ URL::asset('img/logo.png') }}">
    <a href="{{ route('menu_path') }}">
      <img class="nav" src="{{ URL::asset('img/nav.png') }}">
    </a>
  </div>
    <!-- END HEADER -->
    @yield('title')

      @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Whoops!</strong> Ha ocurrido un error.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

     @if(session('success'))
       <div class="alert alert-success">
          {{ session('success') }}
       </div> 
     @endif

      @yield('content')

@include('layouts.js')
@yield('js')
</div>
</body>
</html>