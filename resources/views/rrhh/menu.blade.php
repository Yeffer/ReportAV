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
                    <li><a href="cargo">INGRESO CARGO</a></li>
                    
                    <li><a href="inscripcion">INGRESO PERSONAL</a></li>                    
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection