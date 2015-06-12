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
                <h2>CARGO</h2>
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
                        <ul class="col-lg-8 col-lg-offset-2">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">                           
                                <input name="data[id]" type="hidden" id="id" placeholder="Numero De Documento"/>
                                <h1></h1>
                            <div class="form-group col-xs-12 floating-label-form-group controls" >
                            <label name="tipo"  type="text" data-icon="u" class="col-md-4 control-label">Tipo</label>                                         
                              <p class="help-block text-danger"></p>
                                  <select name="data[tipo]" type="text" id="tipo" class="form-control">
                                        <option></option> 
                                        <option value="O">uno</option>
                                        <option value="O-">dos</option>
                                        <option value="A">tres</option>
                                        <option value="A-">cuatro</option>
                                    </select> 
                            </div>
                            <div class="form-group col-xs-12 floating-label-form-group controls" >
                            <label name="Perfil"  type="text" data-icon="u" class="col-md-4 control-label">Pefil</label>                                          
                              <p class="help-block text-danger"></p>
                                  <select name="data[perfil]" type="text" id="perfil" class="form-control">
                                        <option></option> 
                                        <option value="O">uno</option>
                                        <option value="O-">dos</option>
                                        <option value="A">tres</option>
                                        <option value="A-">cuatro</option>
                                    </select> 
                            </div>
                            <div class="form-group col-xs-12 floating-label-form-group controls" >
                            <label name="Salario"  type="text" data-icon="u" class="col-md-4 control-label">Salario</label>                                          
                              <p class="help-block text-danger"></p>
                                  <select name="data[salario]" type="text" id="salario" class="form-control">
                                        <option></option> 
                                        <option value="O">uno</option>
                                        <option value="O-">dos</option>
                                        <option value="A">tres</option>
                                        <option value="A-">cuatro</option>
                                    </select> 
                            </div>
                            <div class="form-group col-xs-12 floating-label-form-group controls" >
                            <label name="pagoPerfil"  type="text" data-icon="u" class="col-md-4 control-label">Pago Perfil</label>                                          
                              <p class="help-block text-danger"></p>
                                  <select name="data[pagoPerfil]" type="text" id="pagoPerfil" class="form-control">
                                        <option></option> 
                                        <option value="O">uno</option>
                                        <option value="O-">dos</option>
                                        <option value="A">tres</option>
                                        <option value="A-">cuatro</option>
                                    </select> 
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label name="detallePerfil" type="text"  data-icon="u" class="col-md-4 control-label">Detalle del Perfil</label>  
                                        <input class="form-control" name="data[detallePerfil]" type="text" id="detallePerfil" placeholder="Detalle Perfil"/>
                                  <p class="help-block text-danger"></p>  
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-fo<!--rm-group controls"> 
                                <label class="col-md-4 control-label" type="text"  data-icon="u">Variable</label>
                                        <input class="form-control" name="data[variable]" type="text" id="variable" placeholder="Variable"/>
                                  <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="form-group col-xs-12 floating-label-form-group controls">                            
                                    <label type="text" class="col-md-4 control-label" ></label>
                                    <div class="col-md-6">                                                                                                                                                                                                                                                                                                                                                                                                                
                                        <input type="submit" name="Ingresar" value="Ingresar" class="boton"/>                                 
                                    </div>
                                </div>                                                           
                           </form>                     
                        </div>
                    </div>
                </div>        
 </section>            

 

@endsection

