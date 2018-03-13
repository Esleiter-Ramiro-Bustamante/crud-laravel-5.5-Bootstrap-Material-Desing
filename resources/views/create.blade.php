@extends('layouts.app')

@section('content')

<div class="container">
    @if ($errors->any())
    @foreach ($errors->all() as $error )
    <div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Oh snap!</strong> 
  
  {{$error}}
  </div>
        
    @endforeach

        
    @endif
     <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Registrar Nuevo Estudiante</h3>
        </div>
        <div class="panel-body">
        <form class="form-horizontal" action="{{route('store')}}" method="POST">
            {{csrf_field()}}
            <fieldset>
    <div class="form-group">
      <label for="firstname" class="col-md-2 control-label">Nombre:</label>

      <div class="col-md-10">
        <input type="text" class="form-control" name="firstname" placeholder="Nombre">
      </div>
    </div>

     <div class="form-group">
      <label for="lastname" class="col-md-2 control-label">Apellidos:</label>

      <div class="col-md-10">
        <input type="text" class="form-control" name="lastname" placeholder="Apellidos">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-md-2 control-label">Email:</label>

      <div class="col-md-10">
        <input type="email" class="form-control" name="email" placeholder="Email">
      </div>
    </div>

    <div class="form-group">
      <label for="phone" class="col-md-2 control-label">Telefono:</label>

      <div class="col-md-10">
        <input type="text" class="form-control" name="phone" placeholder="Telefono">
      </div>
    </div>
    
 
    
    <div class="form-group">
      <div class="col-md-10 col-md-offset-2">
          <br>
          <br>
        <button type="button" class="btn btn-danger">Cancel</button>
        <button type="submit" class="btn btn-primary">
            Enviar</button>
      </div>
    </div>

    
   
    </div>
    
   
  </fieldset>
</form>
        </div>
    </div>
</div>
@endsection