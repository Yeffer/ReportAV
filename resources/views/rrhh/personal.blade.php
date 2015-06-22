@extends('app')
    @section('content')
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
            <h3 class="text-center">PERSONAL</h3>
            <div class="well" >
   <div class="navbar-collapse" >
        <ul class="nav navbar-nav">                                
            <li><a href="rrhh">RRHH</a></li>
            <li><a href="inscripcion">REGISTRO PERSONAL</a></li>    
        </ul>
    </div>
    <div class="table-responsive"> 
    <table class="table table-condensed table-bordered table-hover table-striped">
     <thead>
        <tr>
            <th>#</th>
            <th>CEDULA</th>
            <th>NOMBRE</th>
            <th>CARGO</th>
            <th>SALARIO</th>                                          
        </tr>                 
    </thead>
     <tbody>
        <tr>
            <td>1</td>
            <td>796301415</td>
            <td>Camila</td> 
            <td>Asistente Personal</td>                        
            <td>5000000</td>                    
        </tr>
        <tr>
            <td>2</td>
            <td>796301415</td>
            <td>Prueba</td> 
            <td>Asistente Personal</td>                        
            <td>5000000</td>                    
        </tr>
        <tr>
            <td>3</td>
            <td>796301415</td>
            <td>Adriana</td> 
            <td>Asistente Personal</td>                        
            <td>5000000</td>                     
        </tr>
        <tr>
            <td>4</td>
            <td>796301415</td>
            <td>Prueba 2</td> 
            <td>Asistente Personal</td>                        
            <td>5000000</td>                    
        </tr>
        <tr>
            <td>5</td>
            <td>796301415</td>
            <td>Nadie</td> 
            <td>Asistente Personal</td>                        
            <td>5000000</td>                     
        </tr>
    </tbody>
    </table>
        </div>
    </div>    
</div>
@endsection