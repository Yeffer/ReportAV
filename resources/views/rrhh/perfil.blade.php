@extends('app')
	@section('content')
<div class="container">
  <div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
			<h3 class="text-center">PERFILES</h3>
			<div class="well" >
   <div class="navbar-collapse" >
		<ul class="nav navbar-nav">                    
			<li><a href="cargo">CREAR PERFIL</a></li>
			<li><a href="rrhh">RRHH</a></li>
		</ul>
	</div>
	<div class="table-responsive"> 
	<table class="table table-condensed table-bordered table-hover table-striped">
	 <thead>
		<tr>
			<th>#</th>
			<th>CODIGO</th>
			<th>NOMBRE</th>
			<th>SALARIO</th>
			<th>VARIABLE</th>
			<th>VALOR</th>                    
		</tr>                 
	</thead>
	 <tbody>
		<tr>
			<td>1</td>
			<td>PPCRC–LCS01</td>
			<td>LÏDER DE CENTRO DE CONTACTO Y SULUCION- NIVEL 01</td> 
			<td>4200000</td>            
			<td>1200000</td>           
			<td>5000000</td>                    
		</tr>
		<tr>
			<td>2</td>
			 <td>PPCRC–LCS02</td>
			<td>LÏDER DE CENTRO DE CONTACTO Y SULUCION- NIVEL 02</td> 
			<td>4200000</td>            
			<td>1200000</td>           
			<td>5000000</td>                    
		</tr>
		<tr>
			<td>3</td>
			<td>PPCRC–LCS03</td>
			<td>LÏDER DE CENTRO DE CONTACTO Y SULUCION- NIVEL 03</td> 
			<td>4200000</td>            
			<td>1200000</td>           
			<td>5000000</td>                     
		</tr>
		<tr>
			<td>4</td>
			<td>PPCRC–LCS04</td>
			<td>LÏDER DE CENTRO DE CONTACTO Y SULUCION- NIVEL 04</td> 
			<td>4200000</td>            
			<td>1200000</td>           
			<td>5000000</td>                    
		</tr>
		<tr>
			<td>5</td>
		   <td>PPCRC–LCS05</td>
			<td>LÏDER DE CENTRO DE CONTACTO Y SULUCION- NIVEL 05</td> 
			<td>4200000</td>            
			<td>1200000</td>           
			<td>5000000</td>                     
		</tr>

	</tbody>    
</table>
	<ul class="pagination">
			  <li><a href="#">&laquo;</a></li>
			  <li><a href="#">1</a></li>
			  <li><a href="#">2</a></li>
			  <li><a href="#">3</a></li>
			  <li><a href="#">4</a></li>
			  <li><a href="#">5</a></li>
			  <li><a href="#">&raquo;</a></li>
			</ul>                   
	  <!--  <ul class="list-group checked-list-box">
				  <li class="list-group-item" data-style="button">Asesor1</li>
				  <li class="list-group-item" data-color="success">Asesor1</li>
				  <li class="list-group-item" data-style="button" data-color="info">Asesor1</li>
				  <li class="list-group-item" data-color="warning">Asesor1</li>
				  <li class="list-group-item" data-style="button" data-color="danger">Asesor1</li>
			  </ul> -->

		</div>
	</div>    
</div>
@endsection