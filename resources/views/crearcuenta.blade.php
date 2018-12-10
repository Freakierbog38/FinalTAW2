<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>DevOOPS</title>
		<meta name="description" content="description">
		<meta name="author" content="Evgeniya">
		<meta name="keyword" content="keywords">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="{{asset('devoops-master/plugins/bootstrap/bootstrap.css')}}" rel="stylesheet">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
		<link href="{{asset('devoops-master/css/style_v2.css')}}" rel="stylesheet">
	
	</head>
<body>
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
						<a  href="/datos" class="btn btn-primary">Registrar</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
