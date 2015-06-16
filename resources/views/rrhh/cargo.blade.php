@extends('app')

@section('content')


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
                    <li><a href="menu">RRHH</a></li>
                </ul>
                <hr class="star-primary">
            </div>
        </div>
        
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">             
                    <form id="Registro" action="/form/save" name="Registro" method='post' style="aliner:left"> 
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">                           
                            <input name="data[id]" type="hidden" id="id" placeholder="Numero De Documento"/>
                                <h1></h1>
                            <div class="form-group col-xs-12 floating-label-form-group controls">                            
                                <label name="Perfil"  type="text" data-icon="u" class="col-md-4 control-label">Codigo:</label>
                                <div class="col-md-6">                                                                                                                                                                                                                                                                                
                                    <input class="form-control" name="data[detallePerfil]" type="text" id="detallePerfil" placeholder="Codigo de Perfil"/>
                                </div>
                            </div> 
                            <div class="form-group col-xs-12 floating-label-form-group controls">                            
                                <label name="Perfil"  type="text" data-icon="u" class="col-md-4 control-label">Detalle:</label>                                          
                                <div class="col-md-6">                                                                                                                                                                                                                                                                                
                                    <input class="form-control" name="data[detallePerfil]" type="text" id="detallePerfil" placeholder="Detalle"/>
                                </div>
                            </div>     
                            <div class="form-group col-xs-12 floating-label-form-group controls">                            
                                <label name="detallePerfil" type="text"  data-icon="u" class="col-md-4 control-label">Nivel:</label>  
                                <div class="col-md-6">                                                                                                                                                                                                                                                                                
                                    <input class="form-control" name="data[nivel]" type="text" id="nivel" placeholder="Nivel"/>                                
                                </div>
                            </div> 
                            <div class="form-group col-xs-12 floating-label-form-group controls">                            
                                <label class="col-md-4 control-label" type="text"  data-icon="u">Salario:</label>  
                                <div class="col-md-6">                                                                                                                                                                                                                                                                                
                                    <input class="form-control" name="data[salario]" type="text" id="salario" placeholder="Salario"/>
                                </div>
                            </div> 
                            <div class="form-group col-xs-12 floating-label-form-group controls">                            
                                <label class="col-md-4 control-label" type="text"  data-icon="u">Variable:</label>
                                <div class="col-md-6">                                                                                                                                                                                                                                                                                
                                    <input class="form-control" name="data[variable]" type="text" id="variable" placeholder="Variable"/>
                                </div>
                            </div> 
                            <div class="form-group col-xs-12 floating-label-form-group controls">                            
                                    <label type="text" class="col-md-4 control-label" ></label>
                                    <div class="col-md-6">                                                                                                                                                                                                                                                                                                                                                                                                                
                                        <input type="submit" name="crear" value="CREAR" class="boton"/>                                 
                                    </div>
                                </div>                                                           
                           </form>                     
                        </div>
                    </div>
                </div>        
 </section>            

 

@endsection

