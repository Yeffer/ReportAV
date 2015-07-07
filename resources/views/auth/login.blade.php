@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Iniciar Sesión</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Hubo algunos problemas con su entrada.</strong><br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="input-group input-group-lg col-md-6 col-md-offset-4">							
						  <span class="input-group-addon">						  	
						    <span class="glyphicon glyphicon-envelope"></span>
						  </span>
						  <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Correo Electrónico">							
						</div><br>					
					
						<div class="input-group input-group-lg col-md-6 col-md-offset-4">							
						  <span class="input-group-addon">						  	
						    <span class="glyphicon glyphicon-lock"></span>
						  </span>
						  	<input type="password" class="form-control" name="password" placeholder="Contraseña">
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Recordarme
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Iniciar Sesión</button>

							<!--	<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a> -->
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection