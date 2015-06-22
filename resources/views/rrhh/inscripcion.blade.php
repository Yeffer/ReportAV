@extends('app')

@section('content')

<!--<div>
    <input id="buscarCedula" placeholder="Buscar">
</div>-->
<?php if (Session::get('error')) { ?>
<div class="alert alert-danger" >
    <?php echo Session::get('error') ?>
</div>
<?php } ?>   
  <section id="contact" class="container">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>REGISTRO HV</h2>
                <ul class="nav navbar-nav">                    
                    <li><a href="../rrhh">RRHH</a></li>
                    <li><a href="../personal">PERSONAL</a></li>
                </ul>
                <hr class="star-primary">
            </div>
        </div>
      <div class="container">
        <div class="row">
            <div class="col-lg-12 col-lg-offset-0">             
                    <form id="Registro" action="/rrhh/guardar" name="Registro" method='post' style="aliner:left"> 
                        <ul class="col-lg-8 col-lg-offset-2">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <li>                            
                                <input name="data[id]" type="hidden" id="id" placeholder="Numero De Documento"/>
                                <h1></h1>
                              <div class="form-group col-xs-12 floating-label-form-group controls">
                                  <label class="col-md-4 control-label" name="campaña" type="text">Campaña</label>
                                  <div class="col-md-6">                                
                                     <input class="form-control" name="data[campaña]" type="text" id="campaña" placeholder="Campaña"/>                                  
                                  </div>
                              </div>
                                <div class="form-group col-xs-12 floating-label-form-group controls">                                                        
                                    <label name="tipoDocumento"  type="text" class="col-md-4 control-label">Tipo de Documento</label>
                                    <div class="col-md-6">                                                                                                                                                                                                                                                                
                                        <select name="data[tipoDocumento]" type="text" id="tipoDocumento" class="form-control">
                                            <option>--Seleccione Una Opción--</option> 
                                            <option value="CC">Cédula De Ciudadania</option>
                                            <option value="CE">Cédula De Extranjería</option>
                                            <option value="NUIP">Numero Unico Identificaión Persona</option>
                                            <option value="TI">Tarjeta De Identidad</option>
                                        </select>  
                                    </div>
                                </div>
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label class="col-md-4 control-label" type="text">Numero De Documento</label>
                                    <div class="col-md-6">                                
                                        <input class="form-control" name="data[numeroDocumento]" type="text" id="numeroDocumento" placeholder="Numero De Documento" required data-msg="Inserte Numero de Documento"/>
                                    </div>
                                </div>
                                <div class="form-group col-xs-12 floating-label-form-group controls">                            
                                    <label type="text"  class="col-md-4 control-label">Nombres</label>
                                    <div class="col-md-6">                                                                                                
                                        <input class="form-control" name="data[nombre]" type="text" id="nombre" placeholder="Nombres" required data-msg="Inserte un nombre"/>
                                    </div>
                                </div>
                                <div class="form-group col-xs-12 floating-label-form-group controls">                            
                                    <label class="col-md-4 control-label" type="text">Apellidos</label>
                                    <div class="col-md-6">                                                                
                                        <input class="form-control" name="data[apellido]" type="text" id="apellido" placeholder="Apellidos"/>
                                    </div>
                                </div>                                                         
                                <div class="form-group col-xs-12 floating-label-form-group controls">                            
                                    <label name="fechaNacimiento" type="text" class="col-md-4 control-label">Fecha de Nacimiento</label>
                                    <div class="col-md-6">                                                                                                                                                                
                                        <input class="form-control" name="data[fechaNacimiento]" readonly type="text"  id="fechaNacimiento" placeholder="Fecha de Nacimiento"/>
                                    </div>
                                </div>
                                <div class="form-group col-xs-12 floating-label-form-group controls">                            
                                    <label name="fechaExpedicion" type="text"  class="col-md-4 control-label">Fecha de Expedición</label>
                                    <div class="col-md-6">                                                                                                                                                                                                
                                        <input class="form-control" name="data[fechaExpedicion]" readonly type="text"  id="fechaExpedicion" placeholder="Fecha de Expedición"/>
                                    </div>
                                </div>
                                <div class="form-group col-xs-12 floating-label-form-group controls">                            
                                    <label name="lugarExpedicion" type="text"  class="col-md-4 control-label">Lugar de Expedición</label>
                                    <div class="col-md-6">                                                                                                                                                                                                                                
                                        <input class="form-control" name="data[lugarExpedicion]" type="text"  id="lugarExpedicion" placeholder="Lugar de Expedición"/>
                                    </div>
                                </div>
                                <div class="form-group col-xs-12 floating-label-form-group controls">                            
                                    <label name="genero" type="text"  class="col-md-4 control-label">Genero</label>
                                    <div class="col-md-6">                                                                                                                                                                                                                                                                
                                        <select class="form-control" name="data[genero]" id="genero" type="text" id="genero">
                                            <option>--Seleccione Una Opción--</option> 
                                            <option value="M">M</option>
                                            <option value="F">F</option>              
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-xs-12 floating-label-form-group controls">                                                        
                                    <label name="RH"  type="text" class="col-md-4 control-label">RH</label>
                                    <div class="col-md-6">                                                                                                                                                                                                                                                                
                                        <select name="data[RH]" type="text" id="RH" class="form-control">
                                            <option>--Seleccione Una Opción--</option> 
                                            <option value="O">O</option>
                                            <option value="O-">O -</option>
                                            <option value="A">A</option>
                                            <option value="A-">A -</option>
                                            <option value="B">B</option>
                                            <option value="B-">B -</option>
                                            <option value="AB">AB</option>
                                            <option value="AB-">AB -</option>                        
                                        </select>  
                                    </div>
                                </div>
                                <div class="form-group col-xs-12 floating-label-form-group controls">                            
                                    <label name="user" type="text"  class="col-md-4 control-label">Cargo</label>
                                    <div class="col-md-6">                                                                                                                                
                                        <input class="form-control" name="data[cargo]" type="text" id="cargo" placeholder="Cargo"/>
                                    </div>
                                </div>
                                <div class="form-group col-xs-12 floating-label-form-group controls">                            
                                    <label name="EPS" type="text"  class="col-md-4 control-label">EPS</label>
                                    <div class="col-md-6">                                                                                                                                                                                                                                                
                                        <input class="form-control" name="data[EPS]" type="text" id="EPS" placeholder="EPS"/>
                                    </div>
                                </div>
                                <div class="form-group col-xs-12 floating-label-form-group controls">                            
                                    <label name="pension" type="text"  class="col-md-4 control-label">Fondo de Pension</label>
                                    <div class="col-md-6">                                                                                                                                                                                                                                                                                
                                        <input class="form-control" name="data[pension]" type="text"  id="pension" placeholder="Pension"/>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <h1></h1>
                                  <div class="form-group col-xs-12 floating-label-form-group controls">                            
                                    <label name="estadoCivil" type="text"  class="col-md-4 control-label">Estado Civil</label>
                                    <div class="col-md-6">                                                                                                                                                                                                                                                                                                                                                                                                                
                                        <select class="form-control"  name="data[estadoCivil]" id="estadoCivil">
                                            <option>--Seleccione Una Opción--</option> 
                                            <option value="Soltero">Soltero</option>
                                            <option value="Union Libre">Union Libre</option>
                                            <option value="Casado">Casado</option>
                                            <option value="Divorciado">Divorciado</option>
                                            <option value="Viudo">Viudo</option>             
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-xs-12 floating-label-form-group controls">                            
                                    <label name="direccion" type="text"  class="col-md-4 control-label">Dirección</label>
                                    <div class="col-md-6">                                                                                                                                                                                                                                                                                
                                        <input class="form-control" name="data[direccion]" type="text" id="direccion"  placeholder="Direccion"/>
                                    </div>
                                </div>                               
                                 <div class="form-group col-xs-12 floating-label-form-group controls">                            
                                    <label name="telefono1" type="text"  class="col-md-4 control-label">Teléfono1</label>
                                    <div class="col-md-6">                                                                                                                                                                                                                                                                                                                
                                        <input class="form-control" name="data[telefono1]" type="text" id="telefono1"  placeholder="Teléfono1"/>
                                    </div>
                                </div>
                                <div class="form-group col-xs-12 floating-label-form-group controls">                            
                                    <label name="telefono2" type="text"  class="col-md-4 control-label">Teléfono2</label>
                                    <div class="col-md-6">                                                                                                                                                                                                                                                                                                                                                
                                        <input class="form-control" name="data[telefono2]" type="text" id="telefono2"  placeholder="Teléfono2"/>
                                    </div>
                                </div>
                                 <div class="form-group col-xs-12 floating-label-form-group controls">                            
                                    <label name="celular1" type="text"  class="col-md-4 control-label">Celular1</label>
                                    <div class="col-md-6">                                                                                                                                                                                                                                                                                                                                                                                
                                        <input class="form-control" name="data[celular1]" type="text" id="celular1"  placeholder="Celular1"/>
                                    </div>
                                </div>
                                <div class="form-group col-xs-12 floating-label-form-group controls">                            
                                    <label name="celular2" type="text"  class="col-md-4 control-label">Celular2</label>
                                    <div class="col-md-6">                                                                                                                                                                                                                                                                                                                                                                                                                
                                        <input class="form-control" name="data[celular2]" type="text" id="celular2"  placeholder="Celular2"/>
                                    </div>
                                </div>
                                <div class="form-group col-xs-12 floating-label-form-group controls">                            
                                    <label name="celular2" type="text"  class="col-md-4 control-label">Teléfono De Contacto</label>
                                    <div class="col-md-6">                                                                                                                                                                                                                                                                                                                                                                                                                
                                        <input class="form-control" name="data[telefonoContacto]" type="text" id="telefonoContacto"  placeholder="Teléfono De Contacto"/>
                                    </div>
                                </div>                                                        
                                <div class="form-group col-xs-12 floating-label-form-group controls">                            
                                    <label name="email" type="text"  class="col-md-4 control-label" >E-mail</label>
                                    <div class="col-md-6">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
                                        <input class="form-control" name="data[email]" type="text" id="email" placeholder="E-mail"/>
                                    </div>
                                </div>
                                <div class="form-group col-xs-12 floating-label-form-group controls">                            
                                    <label name="profesion" type="text"  class="col-md-4 control-label" >Profesion</label>
                                    <div class="col-md-6">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
                                        <input class="form-control" name="data[profesion]" type="text" id="profesion" placeholder="Profesion"/>
                                    </div>
                                </div>
                                <div class="form-group col-xs-12 floating-label-form-group controls">                            
                                    <label type="text" class="col-md-4 control-label" ></label>
                                    <div class="col-md-6">                                                                                                                                                                                                                                                                                                                                                                                                                
                                        <input type="submit" name="Registro" value="Guardar" class="boton"/>                                 
                                    </div>
                                </div>                               
                            </li>                                       
                        </ul>
                    </form>                     
                </div>
            </div>
        </div>
 </section>            


 <script src="/js/main.js"></script>
@endsection