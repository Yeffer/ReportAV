@extends('app')

@section('content')

<!--<div>
    <input id="buscarCargo" placeholder="Buscar">
</div> -->

<?php if (Session::get('error')) { ?>
    <div class="alert alert-danger" >
<?php echo Session::get('error') ?>
</div>
<?php } ?>   
  <section id="contact" class="container">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>CREAR PERFIL</h2>
                <ul class="nav navbar-nav">                    
                    <li><a href="../rrhh">RRHH</a></li>
                    <li><a href="../perfil">PERFILES</a></li>
                </ul>
                <hr class="star-primary">
            </div>
        </div>        
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                    <form id="Registro" action="/rrhh/save" name="Registro" method='post' style="aliner:left"> 
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">                           
                            <input name="data[id]" type="hidden" id="id" placeholder="Numero De Documento"/>
                                <h1></h1>
                            <div class="form-group col-xs-12 floating-label-form-group controls">                            
                                <label name="Perfil"  type="text" data-icon="u" class="col-md-4 control-label">Codigo:</label>
                                <div class="col-md-6">                                                                                                                                                                                                                                                                                
                                    <input class="form-control" name="data[codigo]" type="text" id="codigo" placeholder="Codigo de Perfil"/>
                                </div>
                            </div> 
                            <div class="form-group col-xs-12 floating-label-form-group controls">                                                        
                                <label name="tipoDocumento"  type="text" class="col-md-4 control-label">Tipo Perfil:</label>
                                <div class="col-md-6">                                                                                                                                                                                                                                                                
                                    <select name="data[tipo]" type="text" id="tipo" class="form-control">
                                        <option>--Seleccione Una Opción--</option> 
                                        <option value="gerente">Gerente</option>
                                        <option value="jefe">Jefe</option>
                                        <option value="supervisor">Supervisor</option>
                                        <option value="coordinador">Coordinador</option>
                                        <option value="analista">Analista</option>
                                        <option value="asesor">Asesor</option>
                                    </select>  
                                </div>
                            </div>
                            <div class="form-group col-xs-12 floating-label-form-group controls">                            
                                <label name="Perfil"  type="text" data-icon="u" class="col-md-4 control-label">Detalle:</label>                                          
                                <div class="col-md-6">                                                                                                                                                                                                                                                                                
                                    <input class="form-control" name="data[descripcion]" type="text" id="descripcion" placeholder="Detalle De Perfil"/>
                                </div>
                            </div>     
                      
                            <div class="form-group col-xs-12 floating-label-form-group controls">                            
                                <label class="col-md-4 control-label" type="text"  data-icon="u">Salario Básico:</label>  
                                <div class="col-md-6">                                                                                                                                                                                                                                                                                
                                    <input class="form-control" name="data[salarioBasico]" type="text" id="salarioBasicosalarioBasico" placeholder="Salario Básico"/>
                                </div>
                            </div> 
                            <div class="form-group col-xs-12 floating-label-form-group controls">                            
                                <label class="col-md-4 control-label" type="text"  data-icon="u">Variable:</label>
                                <div class="col-md-6">                                                                                                                                                                                                                                                                                
                                    <input class="form-control" name="data[variable]" type="text" id="variable" placeholder="Variable"/>
                                </div>
                            </div> 
                                <div class="form-group col-xs-12 floating-label-form-group controls">                            
                                <label class="col-md-4 control-label" type="text"  data-icon="u">Pago Perfil:</label>
                                <div class="col-md-6">                                                                                                                                                                                                                                                                                
                                    <input class="form-control" name="data[pago]" type="text" id="pago" placeholder="Pago De Perfil"/>
                                </div>
                            </div>
                            <div class="form-group col-xs-12 floating-label-form-group controls">                            
                                    <label type="text" class="col-md-4 control-label"></label>
                                    <div class="col-md-6">                                                                                                                                                                                                                                                                                                                                                                                                                
                                        <input type="submit" name="Registro" value="GUARDAR" class="btn btn-primary"/>                                           
                                    </div>
                                </div>                                                           
                           </form>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>CODIGO</th>
                            <th>PERFIL</th>
                            <th>DETALLE</th>
                            <th>BASICO</th>
                            <th>VARIABLE</th>
                            <th>PAGO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        @foreach ($queries as $querie) {
                        echo "<tr>";                            
                            echo "<td>" . {{ $querie->id }} . "</td>";
                            echo "<td>" . {{ $querie->codigo}} . "</td>";
                            echo "<td>" . {{ $querie->tipo}} . "</td>";
                            echo "<td>" . {{ $querie->descripcion }} . "</td>";
                            echo "<td>" . {{ $querie->salarioBasico }} . "</td>";
                            echo "<td>" . {{ $querie->variable}} . "</td>";
                            echo "<td>" . {{ $querie->pago}} . "</td>";                                                              
                        echo "</tr>";
                        @endforeach
                        }
                        ?>  
                    </tbody>
                </table>
            </div>
        </div>
    </div>   
 </section>            
@endsection