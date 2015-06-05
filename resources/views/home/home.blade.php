@extends('app')
    @section('content')

<?php if (Session::get('error')) { ?>
    <div class="alert alert-danger" >
<?php echo Session::get('error') ?>
    </div>
<?php } ?>
  <section id="contact" class="col-xs-12 col-sm-8 col-md-12">
    <div class="container">
        <div id="navbar" class="navbar navbar-default">
          <!--  <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"></a>
            </div> -->
            <div class="navbar-collapse" >
                <ul class="nav navbar-nav">                    
                    <li><a href="coordinador">COORDINADOR</a></li>
                    <li><a href="rrhh">RRHH</a></li> 
                    <li><a href="tecnologia">TECNOLOGIA</a></li>
                    <li><a href="financiero">FINANCIERO</a></li> 
                    <li><a href="direccion">DIRECCIÓN</a></li>                    
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection