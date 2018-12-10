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
					<div class="form-group">
						<label class="control-label">Nombre</label>
						<input type="text" class="form-control" name="nombreReg" />
                    </div>
                    <div class="form-group">
                            <label class="control-label">Email</label>
                            <input type="text" class="form-control" name="emailReg" />
                        </div>
					<div class="form-group">
						<label class="control-label">Contraseña</label>
						<input type="password" class="form-control" name="contraReg" />
					</div>
					<div class="text-center">
						<a  href="/tamano" class="btn btn-primary">Registrar</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
