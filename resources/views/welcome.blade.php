@extends ('layouts.app')
@section('content')
<div class="container">
    @if (session('successMsg')) 
        <div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>:)</strong> {{session('successMsg')}}
</div>
    @endif
    <h1 class="text-center">Lista de Alumnos Registrados</h1>
    <br>
    <br>
    <br>
    <table class="table table-striped table-hover ">
  <thead>
  <tr>
    <th class="">#</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Email</th>
    <th>Telefono</th>
    <th>Operaciones</th>
  
  </tr>
  </thead>
  <tbody>
  <tr>
    @foreach ($students as $student )
  <th>{{$student->id}}</th>
    <td>{{$student->first_name}}</td>
    <td>{{$student->last_name}}</td>
    <td>{{$student->email}}</td>
     <td>{{$student->phone}}</td>
  <td class="text-center"><a href="{{route('edit',$student->id)}}" class="btn btn-info"> <i class="fa fa-pencil-square-o  "></i> </a> </td>
       <td class="text-center">
       <form method="POST" id="delete-form-{{$student->id}}" 
        action="{{route('delete',$student->id)}}" 
        style="display:none">
        {{csrf_field()}}
        {{method_field('delete')}}

         </form>
         <button onclick="if(confirm('Are yue sure,You went to delete this?')){
          event.preventDefault();
          document.getElementById('delete-form-{{$student->id}}').submit();
         }else{
          event.preventDefault(); 
         }" 
         class="btn btn-danger"> <i class="fa fa-trash-o  "></i>

         </button>
   
   </td>
  </tr>
    @endforeach
  </tbody>
</table>
<center style="font-size:20px;">
  {{$students->links()}}
</center>

</div>
@endsection