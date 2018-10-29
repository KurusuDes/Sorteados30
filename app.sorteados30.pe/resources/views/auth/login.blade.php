@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Correo electrónico" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						<input class="form-check-input" type="hidden" name="remember" id="remember" value="1" />

	<div class="contenedor-boton">
		
		<button type="submit" class="btn btn-primary">
			{{ __('Ingresar') }}
		</button>

		<a class="boton_gris" href="/register">Registrarse</a>

	</div>
	
						<div class="text-center">
							<a class="btn btn-link" href="{{ route('password.request') }}"><h3>
								{{ __('¿Has olvidado tu contraseña?') }}</h3>
							</a>
						</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
