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
                <h2>CAMPAÑA</h2>
                <ul class="nav navbar-nav">                    
                    <li><a href="menu">RRHH</a></li>
                </ul>
                <hr class="star-primary">
            </div>
        </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">             
                    <form id="Registro" action="#" name="Registro" method='post' style="aliner:left"> 
                        <ul class="col-lg-8 col-lg-offset-2">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">                           
                                <input name="data[id]" type="hidden" id="id" placeholder="Numero De Documento"/>
                                <h1></h1>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-fo<!--rm-group controls">  
                       <!--             <label class="col-md-4 control-label" type="text"  data-icon="u">N° Cedula</label> -->
                                        <input class="form-control" name="data[cedula]" type="text" id="cedula" placeholder="Numero De Documento" required data-msg="Inserte Numero de cedula"/>
                                  <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                   <!--                 <label name="user" type="text"  data-icon="u" class="col-md-4 control-label">Nombres</label>  -->
                                        <input class="form-control" name="data[nombre]" type="text" id="nombre" placeholder="Nombres"/>
                                  <p class="help-block text-danger"></p>  
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-fo<!--rm-group controls"> 
                    <!--                <label class="col-md-4 control-label" type="text"  data-icon="u">Apellidos</label> -->
                                        <input class="form-control" name="data[apellido]" type="text" id="apellido" placeholder="Apellidos"/>
                                  <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                   <!--                 <label name="user" type="text"  data-icon="u" class="col-md-4 control-label">Cargo</label>  -->
                                        <input class="form-control" name="data[cargo]" type="text" id="cargo" placeholder="Cargo"/>
                                  <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                             <!--       <label name="fechaNacimiento" type="text" data-icon="u" class="col-md-8 control-label">Fecha de Nacimiento</label>  -->
                                        <input class="form-control" name="data[fechaNacimiento]" readonly type="text"  id="fechaNacimiento" placeholder="Fecha de Nacimiento"/>
                                  <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                              <!--      <label name="fechaExpedicion" type="text"  data-icon="u" class="col-md-8 control-label">Fecha de Expedición</label>  -->
                                        <input class="form-control" name="data[fechaExpedicion]" readonly type="text"  id="fechaExpedicion" placeholder="Fecha de Expedición"/>
                                  <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                              <!--      <label name="lugarExpedicion" type="text"  data-icon="u" class="col-md-4 control-label">Lugar de Expedición</label>  -->
                                        <input class="form-control" name="data[lugarExpedicion]" type="text"  id="lugarExpedicion" placeholder="Lugar de Expedición"/>
                                  <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls"  >
                     <!--               <label name="genero" type="text"  data-icon="u" class="col-md-4 control-label">Genero</label>                                          -->
                                  <p class="help-block text-danger"></p>
                                        <select class="form-control" name="data[genero]" id="genero" type="text" >
                                            <option></option>
                                            <option value="M">M</option>
                                            <option value="F">F</option>              
                                        </select>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls" >
                 <!--                   <label name="RH"  type="text" data-icon="u" class="col-md-4 control-label">RH</label>                                          -->
                                  <p class="help-block text-danger"></p>
                                      <select name="data[RH]" type="text" id="RH" class="form-control">
                                            <option></option> 
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
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                  <!--                  <label name="EPS" type="text"  data-icon="u" class="col-md-4 control-label">EPS</label>  -->
                                        <input class="form-control" name="data[EPS]" type="text" id="EPS" placeholder="EPS"/>
                                  <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                      <!--              <label name="pension" type="text"  data-icon="u" class="col-md-4 control-label">Fondo de Pension</label>  -->
                                        <input class="form-control" name="data[pension]" type="text"  id="pension" placeholder="Pension"/>
                                  <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                        <!--            <label name="direccion" type="text"  data-icon="u" class="col-md-4 control-label">Dirección</label>  -->
                                        <input class="form-control" name="data[direccion]" type="text" id="direccion"  placeholder="Direccion"/>
                                  <p class="help-block text-danger"></p>
                                </div>
                            </div>  
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                        <!--            <label name="telefono1" type="text"  data-icon="u" class="col-md-4 control-label">Telefono1</label>  -->
                                        <input class="form-control" name="data[telefono1]" type="text" id="telefono1"  placeholder="Telefono1"/>
                                  <p class="help-block text-danger"></p>
                                </div>
                            </div> 
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                        <!--            <label name="telefono2" type="text"  data-icon="u" class="col-md-4 control-label">Telefono2</label>  -->
                                        <input class="form-control" name="data[telefono2]" type="text" id="telefono2"  placeholder="Telefono2"/>
                                  <p class="help-block text-danger"></p>
                                </div>
                            </div> 
                              <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                       <!--             <label name="celular1" type="text"  data-icon="u" class="col-md-4 control-label">Celular1</label>  -->
                                        <input class="form-control" name="data[celular1]" type="text" id="celular1"  placeholder="Celular1"/>
                                  <p class="help-block text-danger"></p>
                                </div>
                            </div> 
                              <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                       <!--             <label name="celular2" type="text"  data-icon="u" class="col-md-4 control-label">Celular2</label>  -->
                                        <input class="form-control" name="data[celular2]" type="text" id="celular2"  placeholder="Celular2"/>
                                  <p class="help-block text-danger"></p>
                                </div>
                            </div> 
                              <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                        <!--            <label name="telefono2" type="text"  data-icon="u" class="col-md-4 control-label">Telefono2</label>  -->
                                        <input class="form-control" name="data[telefono2]" type="text" id="telefono2"  placeholder="Telefono2"/>
                                  <p class="help-block text-danger"></p>
                                </div>
                            </div> 
                              <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                          <!--          <label name="estadoCivil" type="text"  data-icon="u" class="col-md-4 control-label">Estado Civil</label>                                          -->
                                  <p class="help-block text-danger"></p>
                                   <select class="form-control"  name="data[estadoCivil]" id="estadoCivil">
                                            <option value="Soltero">Soltero</option>
                                            <option value="Union Libre">Union Libre</option>
                                            <option value="Casado">Casado</option>
                                            <option value="Divorciado">Divorciado</option>
                                            <option value="Viudo">Viudo</option>             
                                        </select>
                                </div>
                            </div> 
                              <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                     <!--               <label name="barrio" type="text"  data-icon="u" class="col-md-4 control-label">Barrio</label>  -->
                                        <input class="form-control" name="data[barrio]" type="text" id="barrio"  placeholder="Barrio"/>
                                  <p class="help-block text-danger"></p>
                                </div>
                            </div> 
                              <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                    <!--                <label name="email" type="text"  data-icon="e" class="col-md-4 control-label" >E-mail</label>  -->
                                        <input class="form-control" name="data[email]" type="text" id="email" placeholder="E-mail"/>
                                  <p class="help-block text-danger"></p>
                                </div>
                            </div> 
                              <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                        <!--            <label name="profesion" type="text"  data-icon="u" class="col-md-4 control-label" >Profesion</label>  -->
                                        <input class="form-control" name="data[profesion]" type="text" id="profesion" placeholder="Profesion"/>
                                  <p class="help-block text-danger"></p>
                                </div>
                            </div> 
                                <div class="form-group col-xs-12 floating-label-form-group controls">                            
                                    <label type="text" class="col-md-4 control-label" ></label>
                                    <div class="col-md-6">                                                                                                                                                                                                                                                                                                                                                                                                                
                                        <input type="submit" name="Registro" value="Guardar" class="boton"/>                                 
                                    </div>
                                </div>                                                           
                           </form>                     
                        </div>
                    </div>
                </div>        
 </section>            

 

@endsection

