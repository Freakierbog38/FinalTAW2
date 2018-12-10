@extends('layout')

@section('content')
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
                        <select  class="form-control" name="especialidad">
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
					<div class="form-group">
						<label class="control-label">¿Cuáles son las tres áreas donde te destacas?</label>
                        {{-- <input type="password" class="form-control" name="password" /> --}}
                        <select   class="form-control" name="especialidad">
                                <option value="0">Seleccione</option>
                                <option value="1">Diseño Grafico</option> 
                                <option value="2">PHP</option> 
                                <option value="3">Adobe Photoshop</option>
                                <option value="10">Estructura de articulos</option> 
                                <option value="11">Javascript</option> 
                                <option value="12">Wordpress</option>
                                <option value="13">Adobe Illustrator</option>
                                
                             </select>
                    </div>
                    
					<div class="form-group">
						<label class="control-label">Describe tu especialidad en una línea</label>
                        <input type="text" class="form-control" name="Descripción" />
					</div>
					<div class="text-center">
						<a  href="/completarPF" class="btn btn-primary">Siguiente</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
