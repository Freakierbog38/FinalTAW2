<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>SustoKana</title>
		<meta name="description" content="description">
		<meta name="author" content="Evgeniya">
		<meta name="keyword" content="keywords">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="{{asset('devoops-master/plugins/bootstrap/bootstrap.css')}}" rel="stylesheet">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
		<link href="{{asset('devoops-master/css/style_v2.css')}}" rel="stylesheet">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
				<script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
				<script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
<body>
<div class="container-fluid">
	<div id="page-login" class="row">
		<div class="col-xs-12 col-md-20 col-md-offset-20 col-sm-6 col-sm-offset-3">
			{{-- <div class="text-right"> --}}
				{{-- <a href="page_register.html" class="txt-default">Need an account?</a> --}}
			{{-- </div> --}}
			<div class="box">
				<div class="box-content">
					<div class="text-center">
                        <h3 class="page-header">Hola, ¿listo para trabajar?</h3>
                        <h4>Entre más completo sea tu perfil será más fácil que te contraten.</h4>
					</div>
					<div class="form-group">
						<label class="control-label">¿En qué te especialistas?</label>
                        {{-- <input type="text" class="form-control" name="username" /> --}}
                        <select name="especialidad">
                            <option value="0">Seleccione</option>
                            <option value="1">Programación y Tecnologia</option> 
                            <option value="2">Diseño y Multimedia</option> 
                            <option value="3">Redacción y Traducción</option>
                            <option value="10">Marketing Digital</option> 
                            <option value="11">Soporte Administrativo</option> 
                            <option value="12">Legal</option>
                            <option value="13">Finanzas y Negocios</option>
                            <option value="14">Ingenieria y Arquitectura</option> 
                         </select>
					</div>
					
					<div class="text-center">
						<a  class="btn btn-primary">Sign in</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
