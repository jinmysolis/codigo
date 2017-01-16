@extends('admin.template.main')

@section('title')  crear categoris  @endsection

@section('content')

 @include('admin.template.partials.errores')

 <h1>crear categorias</h1>
 <center>{!!Form::open(['route'=>'admin.categories.store','method'=>'POST'])!!}

 @include('admin.template.partials.formularioCategorie')
 
 
  <p>
 <center><button type="submit" class="btn btn-info btn-lg">Crear Categoria</button></center>
 </p>

{!!Form::close()!!}</center>
@endsection