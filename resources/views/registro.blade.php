@extends('admin.template.main')

@section('title')  Registrar  @endsection

@section('content')

 @include('admin.template.partials.errores')

 <h1>Registrar Usuarios</h1>
 <center>{!!Form::open(['route'=>'registro.store','method'=>'POST'])!!}

 @include('admin.template.partials.formulario')
 
 
  <p>
 <center><button type="submit" class="btn btn-info btn-lg">Crear Categoria</button></center>
 </p>

{!!Form::close()!!}</center>
@endsection