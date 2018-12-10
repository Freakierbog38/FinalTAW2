@extends('layout')

@section('content')

<div class="container-fluid">
	<div id="page-login" class="row">
		<div class="col-xs-12 col-md-20 col-md-offset-20 col-sm-6 col-sm-offset-3">
			
			<div class="box">
				<div class="box-content">
					<div class="text-center">
                        <h3 class="page-header">Publica tu proyecto</h3>
                        <h4>¿Qué necesitas?</h4> 
                        <select   class="form-control" name="categoria">
                            <option value="0">Seleccione</option>
                            <option value="Programación para móviles">Programación para móviles</option> 
                            <option value="Programación web">Programación web</option> 
                            <option value="Diseño de logo">Diseño de logo</option>
                            <option value="Diseño web">Diseño web</option> 
                            <option value="Redacción de articulos">Redacción de articulos</option> 
                            <option value="E-commerce">E-commerce</option>
                            <option value="Publicidad en Google, Fb">Publicidad en Google, Fb</option>
                            <option value="Ilustraciones">Ilustraciones</option> 
                            <option value="WordPress">WordPress</option>
                            <option value="Contenido para sitios web">Contenido para sitios web</option>
                            <option value="Crear o editar video">Crear o editar video</option>
                        </select>
                         {{-- <Tamaño y presupuesto> --}}
                        <h3 class="page-header">Tamaño y presupuesto</h3> 
                         <label>Tamaño: </label>
                        <div class="form-group">
                            <select  class="form-control" name="tamano">
                                <option value="0">Seleccione</option>
                                <option value="Bug o cambio pequeño">Bug o cambio pequeño</option> 
                                <option value="Cambio mediano">Cambio mediano</option> 
                                <option value="Proyecto desde 0">Proyecto desde 0</option>
                            </select>
                        </div>
                        <label>Presupuesto</label>
					    <div class="form-group">
                            <select   class="form-control" name="presupuesto">
                                    <option value="0">Seleccione</option>
                                    <option value="Menos de MX$1.000">Menos de MX$1.000</option> 
                                    <option value="MX$1.000 a $2.100">MX$1.000 a $2.100</option> 
                                    <option value="MX$2.100 a $5.000">MX$2.100 a $5.000</option>
                                    <option value="MX$5.000 a 10.000">MX$5.000 a 10.000</option> 
                                </select>
                        </div>

                        {{-- <Rol que va a cumpliz el freelancer> --}}
                            <h3 class="page-header">¿Qué rol debe cumplir el freelancer?</h3> 
                            <h5></h5>
                           <div class="form-group">
                               <select  class="form-control" name="rol">
                                    <option value="0">Seleccione</option>
                                    <option value="Diseñador">Diseñador</option> 
                                    <option value="Desarrollador">Desarrollador</option> 
                                    <option value="Gerente de proyecto">Gerente de proyecto</option>
                                    <option value="Analista personal">Analista personal</option>
                                    <option value="Diseñar una landing page">Diseñar una landing page</option>
                                </select>
                            </div>

                        {{-- <Elige el nombre y describe proyectos> --}}
                        <h3 class="page-header">Nombre y Descripción de proyecto</h3> 
                         <h5>Mientras mejor sea la descripción del proyecto podrás tener mejor propuestas </h5>
                        <div class="form-group">
                            <input type="text" class="form-control" name="nombreProyecto" placeholder="Nombre del proyecto"/>
                            <br>
                            <textarea type="text" class="form-control" name="descripProyecto" placeholder="Descripcion del proyecto" ></textarea>
                        </div>        

                        {{-- <Agregar habilidades utiles> --}}
                        <h3 class="page-header"> Agrega habilidades necesarias para tu proyecto</h3> 
                        <h5> </h5>
                        <div class="form-group">
                             <textarea type="text" class="form-control" name="habilidades" placeholder="PHP, html5, Javascript, JAVA, C..." ></textarea>
                        </div>

					</div>
                   <br>
					<div class="text-center">
						<a  href="/cuentaP" class="btn btn-primary">Siguiente</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection