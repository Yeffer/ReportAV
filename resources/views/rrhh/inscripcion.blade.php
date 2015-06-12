@extends('app')

@section('content')

<div>
    <input id="buscarCedula" placeholder="Buscar">
</div><br><br>
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
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                        <!--            <label name="direccion" type="text"  data-icon="u" class="col-md-4 control-label">Dirección</label>  -->
                                        <input class="form-control" name="data[apellido]" type="text" id="apellido"  placeholder="Apellido"/>
                                  <p class="help-block text-danger"></p>
                                </div>
                            </div> 
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-fo<!--rm-group controls"> 
                    <!--                <label class="col-md-4 control-label" type="text"  data-icon="u">tipos</label> -->
                                        <input class="form-control" name="data[tipo]" type="text" id="tipo" placeholder="Tipo"/>
                                  <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                   <!--                 <label name="user" type="text"  data-icon="u" class="col-md-4 control-label">salario</label>  -->
                                        <input class="form-control" name="data[salario]" type="text" id="salario" placeholder="Salario"/>
                                  <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                             <!--       <label name="campaña" type="text" data-icon="u" class="col-md-8 control-label">Fecha de Nacimiento</label>  -->
                                        <input class="form-control" name="data[campaña]" type="text"  id="campaña" placeholder="Campaña"/>
                                  <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                              <!--      <label name="fechaExpedicion" type="text"  data-icon="u" class="col-md-8 control-label">Fecha de Expedición</label>  -->
                                        <input class="form-control" name="data[fechaIngreso]" readonly type="text"  id="fechaIngreso" placeholder="Fecha de Ingreso"/>
                                  <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                  <!--                  <label name="EPS" type="text"  data-icon="u" class="col-md-4 control-label">EPS</label>  -->
                                        <input class="form-control" name="data[pension]" type="text" id="pension" placeholder="Pension"/>
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
                      <!--              <label name="pension" type="text"  data-icon="u" class="col-md-4 control-label">Fondo de Pension</label>  -->
                                        <input class="form-control" name="data[codigo]" type="text"  id="codigo" placeholder="Codigo"/>
                                  <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                        <!--            <label name="telefono1" type="text"  data-icon="u" class="col-md-4 control-label">Telefono1</label>  -->
                                        <input class="form-control" name="data[perfil]" type="text" id="perfil"  placeholder="Perfil"/>
                                  <p class="help-block text-danger"></p>
                                </div>
                            </div> 
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                        <!--            <label name="telefono2" type="text"  data-icon="u" class="col-md-4 control-label">Telefono2</label>  -->
                                        <input class="form-control" name="data[variable]" type="text" id="variable"  placeholder="Variable"/>
                                  <p class="help-block text-danger"></p>
                                </div>
                            </div> 
                              <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                       <!--             <label name="celular1" type="text"  data-icon="u" class="col-md-4 control-label">Celular1</label>  -->
                                        <input class="form-control" name="data[coordinador]" type="text" id="coordinador"  placeholder="Coordinador"/>
                                  <p class="help-block text-danger"></p>
                                </div>
                            </div> 
                              <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                       <!--             <label name="celular2" type="text"  data-icon="u" class="col-md-4 control-label">Celular2</label>  -->
                                        <input class="form-control" name="data[EPS]" type="text" id="EPS"  placeholder="EPS"/>
                                  <p class="help-block text-danger"></p>
                                </div>
                            </div> 
                              <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                        <!--            <label name="telefono2" type="text"  data-icon="u" class="col-md-4 control-label">Telefono2</label>  -->
                                        <input class="form-control" name="data[direccion]" type="text" id="direccion"  placeholder="Direccion Residencia"/>
                                  <p class="help-block text-danger"></p>
                                </div>
                            </div> 
                     
                              <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                     <!--               <label name="barrio" type="text"  data-icon="u" class="col-md-4 control-label">Barrio</label>  -->
                                        <input class="form-control" name="data[telefono]" type="text" id="telefono"  placeholder="Telefono"/>
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

