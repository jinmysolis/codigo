@extends('admin.template.main')

@section('title')  crear tags @endsection

@section('content')

 @include('admin.template.partials.errores')

{!!Form::open(['route'=>'admin.tags.store','method'=>'POST'])!!}

 @include('admin.template.partials.formularioTags')
 
 
  <p>
 <center><button type="submit" class="btn btn-info btn-lg">Crear tags</button></center>
 </p>

{!!Form::close()!!}
@endsection