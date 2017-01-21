@extends('admin.template.tema')

@section('title')  crear usuario  @endsection

@section('content')

 @include('admin.template.partials.errores')

{!!Form::open(['route'=>'admin.users.store','method'=>'POST'])!!}

 @include('admin.template.partials.formulario')
 
 
  <p>
 <center><button type="submit" class="btn btn-info btn-lg">Crear Usuario</button></center>
 </p>

{!!Form::close()!!}
@endsection