@extends('layout')

@section('content')
<div class="container-fluid">
	<div id="page-login" class="row">
		<div class="col-xs-12 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
			<div class="text-right">
				<a href="page_register.html" class="txt-default">Need an account?</a>
			</div>
			<div class="box">
				<div class="box-content">
					<div class="text-center">
						<h3 class="page-header">Sustokana</h3>
					</div>
					<form action="/register" method="post">
						<div class="form-group">
							<label class="control-label">Nombre</label>
							<input type="text" class="form-control" name="name" />
						</div>
						<div class="form-group">
								<label class="control-label">Email</label>
								<input type="email" class="form-control" name="email" />
							</div>
						<div class="form-group">
							<label class="control-label">Contraseña</label>
							<input type="password" class="form-control" name="password" />
						</div>
						<div class="text-center">
							<button type="submit" class="btn btn-primary">Registrar</button>
						</div>
						@include('errors')
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
