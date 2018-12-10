@extends('layout')

@section('content')

<div class="container-fluid">
	<div id="page-login" class="row">
		<div class="col-xs-12 col-md-20 col-md-offset-20 col-sm-6 col-sm-offset-3">
			
			<div class="box">
				<div class="box-content">
					<div class="text-center">
                        <h3 class="page-header">Tamaño y presupuesto</h3>
                        <h4>...</h4>
					</div>
				
					<div class="form-group">
						{{-- <label class="control-label">¿En qué te especialistas?</label> --}}
                        {{-- <input type="text" class="form-control" name="username" /> --}}
                        <select  class="form-control" name="especialidad">
                            <option value="0">Seleccione</option>
                            <option value="1">Bug o cambio pequeño</option> 
                            <option value="2">Cambio mediano</option> 
                            <option value="3">Proyecto desde 0</option>
                            
                         </select>
					</div>
					<div class="form-group">
						{{-- <label class="control-label">¿Cuáles son las tres áreas donde te destacas?</label> --}}
                        {{-- <input type="password" class="form-control" name="password" /> --}}
                        <select   class="form-control" name="especialidad">
                                <option value="0">Seleccione</option>
                                <option value="1">Menos de MX$1.000</option> 
                                <option value="2">MX$1.000 a $2.100</option> 
                                <option value="3">MX$2.100 a $5.000</option>
                                <option value="10">MX$5.000 a 10.000</option> 
                                                             
                             </select>
					</div>
					<div class="text-center">
						<a  href="/freedatos" class="btn btn-primary">Siguiente</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection