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
					<h5>¿Quieres registrar Empresa?/¿Quieres ser Freelance?</h5>
					<div class="text-center">
						<center><a href="#" class="btn btn-primary">Empresa</a> <a href="/crear" class="btn btn-primary">Freelance</a></center>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection